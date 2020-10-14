if(typeof ci != "undefined" && typeof ct != "undefined" && typeof cn != "undefined") {
	var cityData = [];
	for(var i = 0; i < ci.length; i++) {
		var city = [];
		if(typeof ct[ci[i]] != "undefined"){
			for(var j = 0; j < ct[ci[i]].length; j++) {
				var threecity = [];
				if(ct[ct[ci[i]][j]]) {
					for(var k = 0; k < ct[ct[ci[i]][j]].length; k++) {
						threecity.push({
							value: ct[ct[ci[i]][j]][k],
							text: cn[ct[ct[ci[i]][j]][k]]
						})
					}
				}
				city.push({
					value: ct[ci[i]][j],
					text: cn[ct[ci[i]][j]],
					children: threecity
				})
			}
		}
		
		cityData.push({
			value: ci[i],
			text: cn[ci[i]],
			children: city
		})
	}
}
if(typeof ji != "undefined" && typeof jt != "undefined" && typeof jn != "undefined") {
	var jobData = [];
	for(var i = 0; i < ji.length; i++) {
		var job_son = [];
		if(typeof jt[ji[i]] != "undefined"){
		
			for(var j = 0; j < jt[ji[i]].length; j++) {
				var job_post = [];
				if(jt[jt[ji[i]][j]]) {
					for(var k = 0; k < jt[jt[ji[i]][j]].length; k++) {
						job_post.push({
							value: jt[jt[ji[i]][j]][k],
							text: jn[jt[jt[ji[i]][j]][k]]
						})
					}
				}
				job_son.push({
					value: jt[ji[i]][j],
					text: jn[jt[ji[i]][j]],
					children: job_post
				})
			}
		}
		
		jobData.push({
			value: ji[i],
			text: jn[ji[i]],
			children: job_son
		})
	}
}
(function($, doc) {
	$.init();
	$.ready(function() {
		
		var hyPickerButton = doc.getElementById('hyPicker');
		if(typeof hyData != "undefined" && hyPickerButton) {
			var hyPicker = new $.PopPicker();
			hyPicker.setData(hyData);
			var dhy = hyPickerButton.getAttribute('data-hy');
			if(dhy) {
				hyPicker.pickers[0].setSelectedValue(dhy);
			}
			var hy = doc.getElementById('hy');
			hyPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				hyPicker.show(function(items) {
					hy.value = items[0].value;
					hyPickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		var cityPickerButton = doc.getElementById('cityPicker');
		if(typeof cityData != "undefined" && cityPickerButton) {
			var cityPicker = new $.PopPicker({
				layer: 3
			});
			cityPicker.setData(cityData);
			var provinceid = cityPickerButton.getAttribute('data-provinceid'),
				cityid = cityPickerButton.getAttribute('data-cityid'),
				three_cityid = cityPickerButton.getAttribute('data-three_cityid');
			if(provinceid) {
				cityPicker.pickers[0].setSelectedValue(provinceid);
			}
			if(cityid) {
				setTimeout(function() {
					cityPicker.pickers[1].setSelectedValue(cityid);
				}, 200);
			}
			if(three_cityid) {
				setTimeout(function() {
					cityPicker.pickers[2].setSelectedValue(three_cityid);
				}, 400);
			}
			cityPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				cityPicker.show(function(items) {
					doc.getElementById('provinceid').value = items[0].value;
					doc.getElementById('cityid').value = items[1].value;
					doc.getElementById('three_cityid').value = items[2].value;
					var html = items[0].text + " " + items[1].text;
					html += items[2].text ? " " + items[2].text : '';
					cityPickerButton.innerText = html;

				});
			}, false);
		}
		
		var jobPickerButton = doc.getElementById('jobPicker');
		if(typeof jobData != "undefined" && jobPickerButton) {
			var jobPicker = new $.PopPicker({
				layer: 3
			});
			jobPicker.setData(jobData);
			var job1 = jobPickerButton.getAttribute('data-job1'),
				job1_son = jobPickerButton.getAttribute('data-job1_son'),
				job_post = jobPickerButton.getAttribute('data-job_post');
			if(job1) {
				jobPicker.pickers[0].setSelectedValue(job1);
			}
			if(job1_son) {
				setTimeout(function() {
					jobPicker.pickers[1].setSelectedValue(job1_son);
				}, 100);
			}
			if(job_post) {
				setTimeout(function() {
					jobPicker.pickers[2].setSelectedValue(job_post);
				}, 300);
			}
			if(jobPickerButton) {
				jobPickerButton.addEventListener('tap', function(event) {
					document.activeElement.blur();
					jobPicker.show(function(items) {
						doc.getElementById('job1').value = items[0].value;
						doc.getElementById('job1_son').value = items[1].value;
						doc.getElementById('job_post').value = items[2].value;
						var html = items[2].text ? items[2].text : items[1].text
						jobPickerButton.innerText = html;
					});
				}, false);
			}
		}

		
		var showAskPickerButton = doc.getElementById('showAskPicker');
		if(showAskPickerButton) {
			var askData = [];
			for(var i = 0; i < ai.length; i++) {
				var ask = [];
				if(typeof at[ai[i]] != "undefined") {
				
					for(var j = 0; j < at[ai[i]].length; j++) {
						ask.push({
							value: at[ai[i]][j],
							text: an[at[ai[i]][j]]
						})
					}
				}
				askData.push({
					value: ai[i],
					text: an[ai[i]],
					children: ask
				})
			}
			var askPicker = new $.PopPicker({
				layer: 2
			});
			askPicker.setData(askData);
			var askResult = doc.getElementById('cid');
			showAskPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				askPicker.show(function(items) {
					askResult.value = items[1].value;
					showAskPickerButton.innerText = items[1].text;
				});
			}, false);
		}
		
		var prComPickerButton = doc.getElementById('prComPicker');
		if(prComPickerButton) {
			var prcomPicker = new $.PopPicker();
			prcomPicker.setData(prData);
			var pr = doc.getElementById('pr'),
				dpr = prComPickerButton.getAttribute('data-pr');
			if(dpr) {
				prcomPicker.pickers[0].setSelectedValue(dpr);
			}
			prComPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				prcomPicker.show(function(items) {
					pr.value = items[0].value;
					prComPickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		var munComPickerButton = doc.getElementById('munComPicker');
		if(munComPickerButton) {
			var muncomPicker = new $.PopPicker();
			muncomPicker.setData(munData);
			var mun = doc.getElementById('mun'),
				dmun = munComPickerButton.getAttribute('data-mun');
			if(dmun) {
				muncomPicker.pickers[0].setSelectedValue(dmun);
			}
			munComPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				muncomPicker.show(function(items) {
					mun.value = items[0].value;
					munComPickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		var moneytypeComPickerButton = doc.getElementById('moneytypeComPicker');
		if(moneytypeComPickerButton) {
			var moneytypecomPicker = new $.PopPicker();
			moneytypecomPicker.setData(moneytypeData);
			var moneytype = doc.getElementById('moneytype'),
				dmoneytype = moneytypeComPickerButton.getAttribute('data-moneytype');
			if(dmoneytype) {
				moneytypecomPicker.pickers[0].setSelectedValue(dmoneytype);
			}
			moneytypeComPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				moneytypecomPicker.show(function(items) {
					if(items[0].value == 2) {
						$('.moneyname')[0].innerHTML = '万美元';
					} else {
						$('.moneyname')[0].innerHTML = '万元';
					}
					moneytype.value = items[0].value;
					moneytypeComPickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		if(typeof numberData != "undefined") {
			var numberPicker = new $.PopPicker();
			numberPicker.setData(numberData);
			var numberPickerBtn = doc.getElementById('numberPicker'),
				number = doc.getElementById('number'),
				dnumber = numberPickerBtn.getAttribute('data-number');
			if(dnumber) {
				numberPicker.pickers[0].setSelectedValue(dnumber);
			}
		
				
				if(numberPickerBtn.innerText == ""&&number.value == "") {
					numberPickerBtn.innerText = numberData[0].text;
					number.value = numberData[0].value;
				}
			
			numberPickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				numberPicker.show(function(items) {
					number.value = items[0].value;
					numberPickerBtn.innerText = items[0].text;
				});
			}, false);
		}
	
		if(typeof expData != "undefined") {
			var expPicker = new $.PopPicker();
			expPicker.setData(expData);
			var expPickerBtn = doc.getElementById('expPicker'),
				exp = doc.getElementById('exp'),
				dexp = expPickerBtn.getAttribute('data-exp');
			if(dexp) {
				expPicker.pickers[0].setSelectedValue(dexp);
			}
		
				
				if(expPickerBtn.innerText == ""&&exp.value == "") {
					expPickerBtn.innerText = expData[0].text;
					exp.value = expData[0].value;
				}
			
			expPickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				expPicker.show(function(items) {
					exp.value = items[0].value;
					expPickerBtn.innerText = items[0].text;
				});
			}, false);
		}

	
		if(typeof reportData != "undefined") {
			var reportPicker = new $.PopPicker();
			reportPicker.setData(reportData);
			var reportPickerBtn = doc.getElementById('reportPicker'),
				report = doc.getElementById('report'),
				dreport = reportPickerBtn.getAttribute('data-report');
			if(dreport) {
				reportPicker.pickers[0].setSelectedValue(dreport);
			}
		
				
				if(reportPickerBtn.innerText == ""&&report.value == "") {
					reportPickerBtn.innerText = reportData[0].text;
					report.value = reportData[0].value;
				}
			
			reportPickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				reportPicker.show(function(items) {
					report.value = items[0].value;
					reportPickerBtn.innerText = items[0].text;
				});
			}, false);
		}
		
		var agePickerBtn = doc.getElementById('agePicker');
		if(typeof ageData != "undefined" && agePickerBtn) {
			var agePicker = new $.PopPicker();
			agePicker.setData(ageData);
			var	age = doc.getElementById('age'),
				dage = agePickerBtn.getAttribute('data-age');
			if(dage) {
				agePicker.pickers[0].setSelectedValue(dage);
			}
		
				
				if(agePickerBtn.innerText == ""&&age.value == "") {
					agePickerBtn.innerText = ageData[0].text;
					age.value = ageData[0].value;
				}
			
			agePickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				agePicker.show(function(items) {
					age.value = items[0].value;
					agePickerBtn.innerText = items[0].text;
				});
			}, false);
		}
		
		var sexPickerBtn = doc.getElementById('sexPicker');
		if(typeof sexData != "undefined" && sexPickerBtn) {
			var sexPicker = new $.PopPicker();
			sexPicker.setData(sexData);
			var sex = doc.getElementById('sex');
				dsex = sexPickerBtn.getAttribute('data-sex');
			if(dsex) {
				sexPicker.pickers[0].setSelectedValue(dsex);
			}
			
				
				if(sexPickerBtn.innerText == ""&&sex.value == "") {
					sexPickerBtn.innerText = sexData[0].text;
					sex.value = sexData[0].value;
				}
		
			sexPickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				sexPicker.show(function(items) {
					sex.value = items[0].value;
					sexPickerBtn.innerText = items[0].text;
				});
			}, false);
		}
	
		var eduPickerBtn = doc.getElementById('eduPicker');
		if(typeof eduData != "undefined" && eduPickerBtn) {
			var eduPicker = new $.PopPicker();
			eduPicker.setData(eduData);
			var	edu = doc.getElementById('edu'),
				dedu = eduPickerBtn.getAttribute('data-edu');
			if(dedu) {
				eduPicker.pickers[0].setSelectedValue(dedu);
			}
			
				if(eduPickerBtn.innerText == ''&&edu.value == ""){
					eduPickerBtn.innerText = eduData[0].text;
					edu.value = eduData[0].value;
				}
			
			eduPickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				eduPicker.show(function(items) {
					edu.value = items[0].value;
					eduPickerBtn.innerText = items[0].text;
				});
			}, false);
		}
		
		if(typeof marriageData != "undefined") {
			var marriagePicker = new $.PopPicker();
			marriagePicker.setData(marriageData);
			var marriagePickerBtn = doc.getElementById('marriagePicker'),
				marriage = doc.getElementById('marriage'),
				dmarriage = marriagePickerBtn.getAttribute('data-marriage');
			if(dmarriage) {
				marriagePicker.pickers[0].setSelectedValue(dmarriage);
			}
			
				if(marriagePickerBtn.innerText == ""&&marriage.value == "") {
					marriagePickerBtn.innerText = marriageData[0].text;
					marriage.value = marriageData[0].value;
				}
		
			marriagePickerBtn.addEventListener('tap', function(event) {
				document.activeElement.blur();
				marriagePicker.show(function(items) {
					marriage.value = items[0].value;
					marriagePickerBtn.innerText = items[0].text;
				});
			}, false);
		}
		
		var typePickerButton = document.getElementById('typePicker');
		if(typeof typeData != "undefined" && typePickerButton) {
			var typePicker = new mui.PopPicker();
			typePicker.setData(typeData);
			var type = document.getElementById('type'),
				dtype = typePickerButton.getAttribute('data-type');
			if(dtype) {
				typePicker.pickers[0].setSelectedValue(dtype);
			}
			typePickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				typePicker.show(function(items) {
					type.value = items[0].value;
					typePickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		var jobstatusPickerButton = document.getElementById('jobstatusPicker');
		if(typeof jobstatusData != "undefined" && jobstatusPickerButton) {
			var jobstatusPicker = new mui.PopPicker();
			jobstatusPicker.setData(jobstatusData);
			var jobstatus = document.getElementById('jobstatus'),
				djobstatus = jobstatusPickerButton.getAttribute('data-jobstatus');
			if(djobstatus) {
				jobstatusPicker.pickers[0].setSelectedValue(djobstatus);
			}
			jobstatusPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				jobstatusPicker.show(function(items) {
					jobstatus.value = items[0].value;
					jobstatusPickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		var titlePickerButton = doc.getElementById('titlePicker');
		if(titlePickerButton) {
			var titlePicker = new $.PopPicker();
			titlePicker.setData(titleData);
			var title = doc.getElementById('title'),
				dtitle = titlePickerButton.getAttribute('data-title');
			if(dtitle) {
				titlePicker.pickers[0].setSelectedValue(dtitle);
			}
			titlePickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				titlePicker.show(function(items) {
					title.value = items[0].value;
					titlePickerButton.innerText = items[0].text;
				});
			}, false);
		}
		
		var sidPickerButton = doc.getElementById('sidPicker');
		if(sidPickerButton) {
			var sidPicker = new $.PopPicker();
			sidPicker.setData(sidData);
			var sid = doc.getElementById('sid'),
				dsid = sidPickerButton.getAttribute('data-sid');
			if(dsid) {
				sidPicker.pickers[0].setSelectedValue(dsid);
			}
			sidPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				sidPicker.show(function(items) {
					sid.value = items[0].value;
					sidPickerButton.innerText = items[0].text;
				});
			}, false);
		}
	
		var nidPickerButton = doc.getElementById('nidPicker');
		if(nidPickerButton) {
			var nidPicker = new $.PopPicker({
					layer: 2
				});
			nidPicker.setData(nidData);
			var dnid = nidPickerButton.getAttribute('data-nid');
			if(dnid) {
				nidPicker.pickers[0].setSelectedValue(dnid);
			}
			var dtnid = nidPickerButton.getAttribute('data-tnid');
			if(dtnid) {
				setTimeout(function() {
					nidPicker.pickers[1].setSelectedValue(dtnid);
				}, 100);
			}
			nidPickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				nidPicker.show(function(items) {
					doc.getElementById('nid').value = items[0].value;
					doc.getElementById('tnid').value = items[1].value;
					nidPickerButton.innerText =items[1].text;
				});
			}, false);
		}
		
		var ispricePickerButton = doc.getElementById('ispricePicker');
		if(ispricePickerButton) {
			var ispriceData = [];
				ispriceData.push({
					value: '1',
					text: '在线收费'
				},
				{
					value: '2',
					text: '到场收费'
				})
			var ispricePicker = new $.PopPicker();
			ispricePicker.setData(ispriceData);
			var disprice = ispricePickerButton.getAttribute('data-isprice');
			if(disprice) {
				ispricePicker.pickers[0].setSelectedValue(disprice);
			}
			ispricePickerButton.addEventListener('tap', function(event) {
				document.activeElement.blur();
				ispricePicker.show(function(items) {
					doc.getElementById('isprice').value = items[0].value;
					ispricePickerButton.innerText =items[0].text;
				});
			}, false);
		}
	});
})(mui, document);