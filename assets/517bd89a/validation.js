var charLimit = 500;
var error_class= 'date_error';
var error_empty_class = 'empty_date';
var start_end_error_class='end_time_start_error';
var error_greater_current = 'error_current_greater';
var timePunchOverLap = "Punches added overlap with each other.";
var loginSessionOverLap = "This Time Keeping Session overlaps with older Time Keeping Session";
var startDateEndDate = "Start Time cannot be after the End Time";
var timepunchOverlapErrror = "Punch Overlap With a Punch In The Existing Time Keeping Session. ";
var startDateEndDateEqual = "End Time cannot be equal to the Start Time.";

var timePunchEmpty = "Time punch cannot be empty";
var dateGreaterThanCur="";
var archivedRows = {}
var xhr=null ;
var archivedClass= 'DeletedRow'
var undoClass= 'UndoDeletedRow';
var validation_datasource  =null;
$(document).ready(function(){
	
	var previos_template ;
	
	/** on change of selectbox**/
	
	$('#template_selection_grid').focus(function(){
		previos_template = $(this).val();
	});
	$('#template_selection_grid').change(function(){
			var r = confirm("Are you sure you want to continue?")
			if(r){
				window.location.href = location.href+"&template_datasource="+$(this).val();
			}else{
				$('#template_selection_grid').val( previos_template);
			}
	});
	/**** one time methods call************/
	dateGreaterThanCur = "Start Time/End Time cannot be greater than  "+$("#dateHidden").val();
	startTime();
	/* set session review if review session*/
	setStartTimeOfSessionReview();    
    if($.trim($("#dateHidden").val())==""){
        generateDate();
    }
    /* set abnormal session if an abnormal case*/
    setAbnormalStartTime();
    /**** one time methods call ends************/
    
    /***********************date time field initialization methods****************/

    refreshDateTimePicker();
    /*************************date time field initialization methods end****************/
    
    
    
    /************************ date time fiel event Handers***********************/
    
	

		
	$('.start_time_input_date').on('change',function(){		

		 $(this).closest(".GridEditableRow").find(".end_time_input_date").data("DateTimePicker").
		 setStartDate(new Date($(this).val()));
	});	
	
	/* trigger datetime controller on clicking of icons*/
	$('body').on('click','.timeClick',function(){		
		$(this).parent().find('.end_time_input_time').trigger('click');
		$(this).parent().find('.start_time_input_time').trigger('click');
			
	});
	
	
	$('body').on('click','.dateClick',function(){
		$(this).parent().find('input').trigger('focus');
	});
	
	/* trigger datetime controller on clicking of icons end*/
	
	
	
	 $('body').on('change','.datetimeField',function(){
	    	concatenateDateTime($(this));
	    });
	 
	 /* removing error messages on focus*/
	 $('body').on('click','.datetimeField',function(){
	        $('body').find('.TblInputFieldError').remove();
	        $('.datetimeField').removeClass('GridErrorField');
	    })      	
	    
   /* undo a deleted time punch*/
   $('body').on('click','.'+undoClass,function(){
		 var id= $(this);
         $('#undo-confirm').data('listID', id);
         /* on confirmation undo confirm button event handler is called*/
         $('#undo-confirm').html('Are you sure you want to undo the deleted punch ?').dialog('open');
	});
    
    /* when deleting a time punch*/
    $('#gridWidgetitemRows').delegate('.delete', 'click', function(e){
        e.preventDefault();
        var length = 2;
        if($('.remainingActivities').data('count')!=""){
            length = parseInt($('.remainingActivities').data('count'));
        }
        if($('.activities_rows:not(.'+archivedClass+')').length>length){
            var id= $(this).closest('tr');
            $('#delete-confirm').data('listID', id);
            $('#delete-confirm').html('Are you sure you want to delete this time punch ?').dialog('open');
          
        }else{  
            $('#last_error_dialog').html('You cannot delete the last activity').dialog("open");
        }	
    }) /* when adding a time punch*/
            .delegate('.add', 'click', function(e){
            	$("#isEdited").val("yes");
                e.preventDefault();
    	var counter = $('.activities_rows').length
    	var row1 = $(this).closest('tr');// first row
    	var row2 = $(this).closest('tr').nextAll().not("."+archivedClass).first();
    	var tr = row1.clone();
    	var start_end_array = getStartEndDateForNewRow(row1,row2);
    	$(tr).attr('id','tr_'+counter);  
    	$(tr).find('.TblInputFieldError').remove();
    	$(tr).find('.datetimeField').removeClass('GridErrorField');
    	$(tr).find('input').removeClass(error_class+' '+error_empty_class+' '+start_end_error_class);
    	var starttime = $(this).closest('tr').find( "input" )[2].value;
    	var startdate_datetype = new Date(starttime);
    	startdate_datetype = addSeconds(startdate_datetype,2)
    	startdate_datetype_str = dateToStr(startdate_datetype);
    	//BN end 
    	$(tr).find( "input" )[2].id = 'start_time'+counter;    	
    	$(tr).find( "input" )[0].value = start_end_array[0]; // start date
    	$(tr).find( "input" )[1].value = start_end_array[1];// start time
    	$(tr).find( "input" )[2].value = start_end_array[2];//start date and time 
    	$(tr).find( "input" )[3].value = start_end_array[3];//end date
    	$(tr).find( "input" )[4].value = start_end_array[4];//end time
    	$(tr).find( "input" )[5].value = start_end_array[5];//end date and time
    	$(tr).find("input").value=$(tr).find( "input" )[5].value;    
    	$(tr).find("input").readonly="readonly";
    	$(tr).find("input").id= "end_time"+counter;
    	$(tr).find( "td" )[3].id = 'duration_'+counter;
    	$(tr).find( "td" )[3].innerText = "0h 0m 0s";
        $(this).closest('tr').after(tr);
        //$('#mytable tr:first input').attr('value','');
      	refreshDateTimePicker();
       	refreshSerialNos();
     
    });
	
	 /******************** date time fiel event Handers ends**********************/
    
	 
	 /******************** Dialog boxes configuration**********************/
    /* configuration of dialog boxes*/
    $("#delete-confirm").dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        buttons: {
            'Yes': function() { // remove what you want to remove
                // do something here
            	$("#isEdited").val("yes");
                var led = $("#delete-confirm");
                var rowid=led.data('listID');
                if($(rowid.find(".start_time_input_time")).val()=="" &&$ 
                	(rowid.find(".start_time_input_time")).val()==""){
                	rowid.remove();
                }else{
                	archiveRow(rowid);
                }
                refreshSerialNos();
                /* calculate summary and validate time punches gapshould be called here as well*/
                $(this).dialog('close');
                $("body").trigger("rowdeleted");
            },
            No: function() {
                $(this).dialog('close');
            }
        }
    });
    $("#undo-confirm").dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        buttons: {
            'Yes': function() { // remove what you want to remove
                // do something here
            	$("#isEdited").val("yes");
                var led = $("#undo-confirm");
                var undo=led.data('listID');
            	var current_row = undo.closest("tr");            	
            	var uniqid = undo.data("uniqid");       
            	/* calling a function to undo archived row */
        		undoArchivedRow(current_row,uniqid);
        		
                $(this).dialog('close');
                
            },
            No: function() {
                $(this).dialog('close');
            }
        }
    });
  
 
    $( "#dialog-message" ).dialog({
        modal: true,
        buttons: {
            Ok: function() {
                $( this ).dialog( "close" );
            }
        }
    });
    /* configuration of dialog boxes ends*/
    
//    $('.end_time_input_time').timepicker().on('hide.timepicker', function(e){
//    	alert("here");
//    });
	$('body').on('focusout','.end_time_input_time ',function(){
			
	});
})
function addSecondsTonextPunch(th){
	var end_time = $(th).closest('.activities_rows').find('.end_time_input').val();
	var old_time = $(th).data('prev_date');
	if(checkValidateDate(end_time) && checkValidateDate(old_time)){
		end_time= new Date(end_time);
		var old_time  = new Date(old_time);
		var next_date = $(th).closest('.activities_rows').next('.GridEditableRow');				
		if(next_date.length>0 && end_time > old_time){
			var start_fulldate_next_obj = next_date.find('.start_time_input');
			var start_date_next_obj = next_date.find('.start_time_input_date');
			var start_time_next_obj = next_date.find('.start_time_input_time');
			var start_date_next = start_fulldate_next_obj.val();
			var end_date_next = next_date.find('.end_time_input').val();
			var addSecond = false;
			if(checkValidateDate(start_date_next)){
				addSecond = true
				start_date_next = new Date(start_date_next);
				if(checkValidateDate(end_date_next)){
					end_date_next = new Date(end_date_next);					
					if((start_date_next >= end_date_next) || (end_date_next - end_time <=2000) ||(start_date_next-end_time > 0) ){
						addSecond =false;
					}
				}
				if(addSecond){
					start_date_next = new Date(end_time.toString());							
					start_date_next.setSeconds(start_date_next.getSeconds()+1);							
					var start_date_arr = dateToArray(start_date_next);
					start_fulldate_next_obj.val(start_date_arr[0]+" "+start_date_arr[1])
					start_date_next_obj.val(start_date_arr[0]);
					start_time_next_obj.val(start_date_arr[1]);
					var errorTmpl = "<div class=\"TblInputFieldError updatedError\"><div class=\"ErrorArrow\"></div>This punch has been updated to avoid overlapping punches.</div>";
					var updated = next_date.find('.start_time_input').closest('td').append(errorTmpl);
					
					setTimeout(function (updated) {    		
						updated.find('.TblInputFieldError.updatedError').fadeOut();
				       }, 3000,updated);
					
				}
			}

		}
	}
}

//Add seconds in newly added timePunch
function getStartEndDateForNewRow(row1,row2){
	var defaultArary =  ['','','','','',''];
	var secondsThreshHold = 2;
	var end_date_row1 = row1.find('.end_time_input').val();
	if(row2){
		var start_date_row2 = row2.find('.start_time_input').val();
		if(end_date_row1!='' && start_date_row2!=''){
			end_date_row1= new Date(end_date_row1);
			start_date_row2 = new Date(start_date_row2);
			var diff = (start_date_row2-end_date_row1)/1000;
			if(start_date_row2>end_date_row1 && diff>secondsThreshHold){
				var start_date_new_row = addSeconds(end_date_row1,1);
				var end_date_new_row = subtractSeconds(start_date_row2,1);
				var startDateArray = dateToArray(start_date_new_row);
				var endDateArray = dateToArray(end_date_new_row);
				var startDate = dateToStr(start_date_new_row);
				var endDate =dateToStr(end_date_new_row) ;
				return [startDateArray[0],startDateArray[1],startDate,endDateArray[0],endDateArray[1],endDate];
			}
			
		}
	}
	var end_time_date = row1.find('.end_time_input_date').val();
	
	if(end_time_date!=""){
		defaultArary[0] = end_time_date;
		defaultArary[3] = end_time_date;
	}
	return defaultArary;
}
/* function to check overlapping time session if in db*/
function getOverlapSessionFromDB(result){
    
    var startdate = null;
    var enddate = null;
    var startDatefromdb=new Date(result[0]);
    var endDatefromdb=new Date(result[1]);
    var errorTmpl = "<div class=\"TblInputFieldError\"><div class=\"ErrorArrow\"></div>{errorMsg}</div>";
    $('.start_time_input').each(function(firstIndex,e){
    if( $(this).closest('.activities_rows').find('#start_time_lastrow').length==0){
        var curStartdate = new Date($(this).val());
        var curEndDate = new Date($($('.end_time_input').get(firstIndex)).val());
        var showMSG = $(this); 
        if(startDatefromdb<=curStartdate || endDatefromdb>=curStartdate){
            var errorMsg = errorTmpl.replace("{errorMsg}",timepunchOverlapErrror);
            showMSG.closest('td').append(errorMsg);
            $($('.start_time_input').get(firstIndex)).closest('td').find('.datetimeField').addClass('GridErrorField');
        }
        if(startDatefromdb>=curEndDate || endDatefromdb<=curEndDate){
        	var errorMsg = errorTmpl.replace("{errorMsg}",timepunchOverlapErrror);
            showMSG.closest('td').append(errorMsg);
            $($('.end_time_input').get(firstIndex)).closest('td').find('.datetimeField').addClass('GridErrorField');
        }

        /*if(startDatefromdb>=curStartdate && curStartdate<=endDatefromdb||startDatefromdb>=curEndDate&&curEndDate<=endDatefromdb ||endDatefromdb>curStartdate ||endDatefromdb>curEndDate){
            
            var errorMsg = errorTmpl.replace("{errorMsg}",timepunchOverlapErrror);
//            
            showMSG.closest('td').append(errorMsg);
            $($('.end_time_input').get(firstIndex)).closest('td').find('.datetimeField').addClass('GridErrorField');
            
        }*/

        }	 
    });
    return [startdate,enddate];
}    

//BN: function to refresh datatime picker with each input box, on above function it is triggered on first time only
function refreshDateTimePicker(){
    $(".date > input").each(function(i,el) {
    	setTimeout(function () {    		
       	 var value=$(el).datetimepicker({
                language: 'en',
                pickTime: false
            });
       	if($(el).hasClass("end_time_input_date")){
	   		 var tempVal =$(el).closest(".GridEditableRow").find(".start_time_input_date").val();	   		 
	   		 $(el).data("DateTimePicker").setStartDate(new Date(tempVal));
	   	}
       }, (i+1) * 150);
    	
    });
    $(".time > input.timeClass").each(function(i,el) {
    	 setTimeout(function () {
    		 if($(el).hasClass('end_time_input_time')){
    			 $(el).timepicker({showSeconds:true,minuteStep:1,secondStep:1, defaultTime: false}).
    			 on('hide.timepicker', function(e){
    				 	addSecondsTonextPunch(el);
    			    }).on('show.timepicker',function(e){
    			    	$(this).data('prev_date',$(this).closest('.activities_rows').find('.end_time_input').val());
    			    }); 
    				 
    		 }else{
    			 $(el).timepicker({showSeconds:true,minuteStep:1,secondStep:1, defaultTime: false});
    		 }
        }, (i+1) * 150);
             
    });

}  
//BN: refreshing serial numbers
function refreshSerialNos(){
    var count = 1;
    
    $("#gridWidgetitemRows .serialNo").each(function() {
        $(this).html(count);
        count++;
    });
}
    
    


function concatenateDateTime(el){

    var start_date  = el.closest('.activities_rows').find('.start_time_input_date').val();
    var start_time  =	el.closest('.activities_rows').find('.start_time_input_time').val();   
    var starttimeString = start_date+" "+start_time
    var start_datetime = new Date(starttimeString);
    var end_date  = el.closest('.activities_rows').find('.end_time_input_date').val();    
    var end_time  =	el.closest('.activities_rows').find('.end_time_input_time').val();
    var endtimeString = end_date+" "+end_time;
    var end_datetime = new Date(endtimeString);
    el.closest('.activities_rows').find('.start_time_input').val(start_datetime);
    el.closest('.activities_rows').find('.end_time_input').val(end_datetime);
    var durationCls = el.closest('.activities_rows').find('.duration_cls');
    el.closest('.activities_rows').find('.start_time_input').val(start_date+" "+start_time);
    el.closest('.activities_rows').find('.end_time_input').val(end_date+" "+end_time);
    if(checkValidateDate(starttimeString) && checkValidateDate(endtimeString) ){ 
        var diff = end_datetime - start_datetime;
        var diffSeconds = diff / 1000;
        var diffMinutes = diffSeconds / 60;
        durationCls.html(parseInt(diffMinutes/60)+'h '+ parseInt((diffMinutes % 60))+'m '+ parseInt((diffSeconds%3600%60))+'s');
    }else{
    	durationCls.html("");
    }
   
    	 
}
function validateShiftDate(){
	if($('.shift_date_editable').length>0){
		var rtn = true
		$.each(validation_shiftdates_datasource,function(k,v){
			var date1 = new Date($.trim(v));
			var date2 = new Date($.trim($('.shift_date_editable').val()));			
			if(date1.getTime() == date2.getTime()){
				rtn =  false;
			}
			
		});		
		return rtn;
	}else{
		return false; // return false if not editable
	}
//	if($('.shift_date_editable').length>0){
//			if($('.shift_date_editable').data('shiftdateoriginal') != $('.shift_date_editable').val()){
//				return true;
//			}
//			return false;
//	}else{
//		return false; // return false if not editable
//	}
}

function validateTimePunchesTemplate(){
	var match_array = new Array();
	
	if(validation_datasource  !=null){
		
		$.each(validation_datasource,function(k,v){		
			if(match_grid(v)){
				match_array.push(k);
			}	
		})
		
	}
	return match_array;
}
function match_grid(data){
	var matches = true
	
	if(data.length == $('#gridWidgetitemRows .start_time_input').length){
		
		for(var i = 0;i<data.length;i++){
			var tmp_match = false;
			var data_start_date = new Date($.trim(data[i].start_time)).getTime();
			var data_end_date = new Date($.trim(data[i].end_time)).getTime();
			
			$('.start_time_input').each(function(firstIndex){
				 var start_date = new Date($(this).val()).getTime();
		         var end_date = new Date($($('#gridWidgetitemRows .end_time_input').get(firstIndex)).val()).getTime();		         
		         var activity_type_id =$($('#gridWidgetitemRows .activity_type').get(firstIndex)).val();
		         if( data_start_date== start_date &&  data_end_date ==end_date 
		        		 &&  data[i].activity_type_id == activity_type_id){
		        	 tmp_match = true;		        	 
		         }
			});
			if(!tmp_match){
				matches = false;
				
				break;
			}
		}
	}else{
		matches = false;
	}
	return matches;
}
function validateTimePunches(){
    var rtn = true;
    var errorTmpl = "<div class=\"TblInputFieldError\"><div class=\"ErrorArrow\"></div>{errorMsg}</div>";
	
	
    $('.start_time_input').each(function(firstIndex){
    	
    	if( $(this).closest('.activities_rows').find('#start_time_lastrow').length==0){
            var start_date = $(this);
            var end_date = $($('.end_time_input').get(firstIndex))
            if(validationIsNotEmpty(start_date,end_date,errorTmpl))
            {
                if(validateStartDateNotGreater(start_date,end_date,errorTmpl)){
                    if(validateTimePunchNotGreaterThanCurrent(start_date,end_date,errorTmpl)){
                        if(validateTimePunchOverLap(start_date,end_date,errorTmpl,firstIndex)){
	    							
                        }else{
                            rtn = false;
                            return false;
                        }
                    }else{
                        rtn = false;
                        return false;
                    }
                }else{
                    rtn = false;
                    return false;
                }
            }else {
                rtn = false;
                return false;
            }
    	}
    });
    return rtn;
	
}

function validationIsNotEmpty(start_date,end_date,errorTmpl){
    if(!checkValidateDate(start_date.val()) || !checkValidateDate(end_date.val()))
    {
        if(!checkValidateDate(start_date.val())){
            var errorMsg = errorTmpl.replace("{errorMsg}",timePunchEmpty)
            start_date.closest('td').append(errorMsg);
        }
        if(!checkValidateDate(end_date.val())){
            var errorMsg = errorTmpl.replace("{errorMsg}",timePunchEmpty)
            end_date.closest('td').append(errorMsg);
        }
        return false;
    }
    return true;
}

function validateTimePunchNotGreaterThanCurrent(start_date,end_date,errorTmpl){
    var start_date_cls = new Date(start_date.val());
    var end_date_cls = new Date(end_date.val());
    var curDate =new Date($("#dateHidden").val());
	
	
    if(start_date_cls >= curDate || end_date_cls >= curDate){
        var errorMsg = errorTmpl.replace("{errorMsg}",dateGreaterThanCur)
        end_date.closest('td').append(errorMsg);
        end_date.closest('td').find('.datetimeField').addClass('GridErrorField');
        return false;
    }
    return true;
}
function validateStartDateNotGreater(start_date,end_date,errorTmpl){
    var start_date_cls = new Date(start_date.val());
    var end_date_cls = new Date(end_date.val());
	
    if(end_date_cls < start_date_cls ){
		
        var errorMsg = errorTmpl.replace("{errorMsg}",startDateEndDate)
        start_date.closest('td').append(errorMsg);
        start_date.closest('td').find('.datetimeField').addClass('GridErrorField');
        return false;
    }
    else if(end_date_cls.getTime() === start_date_cls.getTime()){
		
        var errorMsg = errorTmpl.replace("{errorMsg}",startDateEndDateEqual)
        end_date.closest('td').append(errorMsg);
        end_date.closest('td').find('.datetimeField').addClass('GridErrorField');
        return false;
    }
    return true;
}
function validateTimePunchOverLap(start_date,end_date,errorTmpl,startIndex){
    var rtn = true;
    $('.start_time_input').each(function(secondIndex){
        if(secondIndex!=startIndex){
            var start_date_compare = $(this);
            var end_date_compare = $($('.end_time_input').get(secondIndex));
            var start_date1 = new Date(start_date.val());
            var end_date1 = new Date(end_date.val());
            var start_date2 = new Date(start_date_compare.val());
            var end_date2 = new Date(end_date_compare.val());
            if((start_date1 <= end_date2) 
                    &&(start_date2 <=end_date1)
                    ){
                if(start_date.closest('td').find('.GridErrorField').length==0){
                    var errorMsg = errorTmpl.replace("{errorMsg}",timePunchOverLap)
                    start_date.closest('td').append(errorMsg);
                    start_date.closest('td').find('.datetimeField').addClass('GridErrorField');
								
                    start_date_compare.closest('td').append(errorMsg);
                    start_date_compare.closest('td').find('.datetimeField').addClass('GridErrorField');
								
                    rtn = false;
                    return false;
                }
            }
        }
		 			 
    }
		 
            );
    return rtn;
}


function archiveRow(row){	
	var uniqid = getUniqId();
	saveArchivedData(row,uniqid);
	displayArchivedData(row,uniqid);
}

/* this method saves the arvhive data in a global variable archivedRows*/
function saveArchivedData(row,uniqid){
	
	archivedRows[uniqid] = {
			"html":row.html(),
			'start_date':$(row.find(".start_time_input_date")).val(),
			'start_time':$(row.find(".start_time_input_time")).val(),
			'start_date_time':$(row.find(".start_time_input")).val(),
			'end_date':$(row.find(".end_time_input_date")).val(),
			'end_time':$(row.find(".end_time_input_time")).val(),
			'end_date_time':$(row.find(".end_time_input")).val(),
			'activity_type':$(row.find(".activity_type option:selected")).val() ,
	};	
}



/* this method displayes the arvhive data in a global variable archivedRows*/
function displayArchivedData(row,uniqid){
	$(row).addClass(archivedClass);
	$(row).find('.datetimeField').removeClass('GridErrorField');	
	$(row).find('input').removeClass(error_class+' '+error_empty_class+' '+start_end_error_class);
	$(row).find('.TblInputFieldError').remove();
	var start_time = $(row.find(".start_time_input_date")).val()+" <span class='GridBlue'> "+$(row.find(".start_time_input_time")).val()+"</span>";
	var end_time = $(row.find(".end_time_input_date")).val()+" <span class='GridBlue'> "+ $(row.find(".end_time_input_time")).val()+"</span>";
	var duration = $(row.find(".duration_cls")).html();
	var activity_type =  $(row.find(".activity_type option:selected")).text(); 
	 $(row.find("td")[0]).removeAttr("class")
	var first_column = $(row.find("td")[1]);
	var second_column = $(row.find("td")[2]);
	var third_column = $(row.find("td")[3]);
	var fourth_column = $(row.find("td")[4]);
	var fifth_column = $(row.find("td")[5]);
	var undoHtml = "<div  class='undoImage'><a href='#.'>"+
           "Undo</a></div>";          
	var undo = $(undoHtml);	
	first_column.html(start_time);
	second_column.html(end_time);
	third_column.removeAttr("class").removeAttr("id").html(duration);
	fifth_column.addClass(undoClass).html(undo);
	fifth_column.data("uniqid",uniqid);
	fourth_column.html(activity_type);
}



/* this method undo the deleted row*/
function undoArchivedRow(row,uniqid){
	row.removeClass(archivedClass);	
	row.html(archivedRows[uniqid]["html"]);
	$(row).find('.datetimeField').removeClass('GridErrorField');	
	$(row).find('input').removeClass(error_class+' '+error_empty_class+' '+start_end_error_class);
	$(row).find('.TblInputFieldError').remove();
	$(row.find(".start_time_input_date")).val(archivedRows[uniqid]["start_date"]);
	$(row.find(".start_time_input_time")).val(archivedRows[uniqid]["start_time"]);
	$(row.find(".start_time_input")).val(archivedRows[uniqid]["start_date_time"]);
	$(row.find(".end_time_input_date")).val(archivedRows[uniqid]["end_date"]);
	$(row.find(".end_time_input_time")).val(archivedRows[uniqid]["end_time"]);
	$(row.find(".end_time_input")).val(archivedRows[uniqid]["end_date_time"]);
	$(row.find(".activity_type")).val(archivedRows[uniqid]["activity_type"]);
	var fifth_column = $(row.find("td")[5]);
//	fifth_column.removeClass(undoClass)
//	fifth_column.removeAttr("data-uniqid");
	refreshDateTimePicker();
	refreshSerialNos();
	/*calculatesummary an validategap shoyld be called somehow*/
	$("body").trigger("rowundo");

}
function checkValidateDate(d){
	
    if(d.split(" ").length==3){
        return true;
    }
    return false;
}

function getUniqId(){
	return (new Date().getTime()).toString(16);
}

function getMaxMinDate(){
    var startdate = null;
    var enddate = null;
    $('.start_time_input').each(function(firstIndex){
		
        var curStartdate = new Date($(this).val());
        var curEndDate = new Date($($('.end_time_input').get(firstIndex)).val());
	
        if(startdate == null || curStartdate < new Date(startdate)){
			
            startdate = $(this).val();
        }
        if(enddate == null || curEndDate > new Date(enddate)){
            enddate = $($('.end_time_input').get(firstIndex)).val();
        }
		 
    });
    return [startdate,enddate];
}

function isTimeSessionValid(){

    var res;
    var dataArr = getMaxMinDate();
    
    var xhr =  $.ajax({
        type     : "POST",
        cache    : false,
        url      : $('#ajaxvalidation').val(),
//        dataType: 'json',
        data     : {
            "startdate":dataArr[0],
            "enddate":dataArr[1],
            "login_session_id":$("#login_session_id").val()
        },
        async:false,
        success  : function(data) {
            if($.trim(data)!=""){
                res = data.split(",");
//                 	 
            }
        }
    });
    return res;
}

function setStartTimeOfSessionReview(){
    if($("#start_time_lastrow").hasClass("start_date_time_lastrow_")){
        var today = todayToStr();
        //alert(today);
        //var arrToday = today.split(" ");
		
        $('.start_date_time_lastrow_').text(today);
        $('.start_time_lastrow_hidden start_time_input').attr('value',today);
    }
	
}  
function setAbnormalStartTime(){
    if($('#abnormal_session_start').length >0){
        var today=new Date();
        var todateStr = dateToStr(today);    	
        $('#abnormal_session_start').val(todateStr);
        setAbnormalEndTime();
    }
}

function setAbnormalEndTime(){
    if($('#abnormal_session_date').length >0){
        var today=new Date();
        var todateStr = dateToStr(today);    	
        $('#abnormal_session_date').val(todateStr);
        setTimeout(function(){setAbnormalEndTime();},1000);
    }
}
function startTime()
{
    if($('#last_row_date_start').length>0){
        var id = $('#mytable tr:last td:nth-child(3) input').attr('id');    	
        var datetime = $('#last_row_date_start').val().split(" ");    	
        var date = datetime[0].split("-");
        var time = datetime[1].split(":");
        //TODO: change this time to current time
        var today=new Date();
        var todateStr = dateToStr(today);    	
        $('#end_time_lastrow').html(todateStr);
        $('#end_time_lastrow_hidden').attr('value',todateStr);    	
        var start_actual_time = new Date($('#start_time_lastrow').html());
        var end_actual_time = new Date($('#end_time_lastrow').html());        
        var diff = end_actual_time - start_actual_time;        
        var diffSeconds = diff / 1000;
        var diffMinutes = diffSeconds / 60;        
        $('#duration_lastrow').html(parseInt(diffMinutes/60)+'h '+ parseInt((diffMinutes % 60))+'m '+ parseInt((diffSeconds%3600% 60))+'s');
       
        calculateSummary();
        
        
    }
    
    setTimeout(function(){startTime();},1000);
}
function validateTimePunchesGap(){
	
    var enddate = null;
    $(".message_content").html("");
    //$(".warning_gap").hide();
    //$(".InfoSummeryHeading").remove($(".message_content"));
    var error_flag = false;
    $('.start_time_input').each(function(firstIndex){
    	var warning_content = "";
//    	if( $(this).closest('.activities_rows').find('#start_time_lastrow').length==0){
            var start_date = $(this);
            var end_date = $($('.end_time_input').get(firstIndex))
            var start_date_cls = new Date(start_date.val());
            var end_date_cls = new Date(end_date.val());
            
            if(firstIndex==0){
            	enddate = end_date_cls;
            }else{
            	if(!isNaN(start_date_cls - enddate)){
                    if((start_date_cls - enddate) >= 3000){
                        error_flag = true;
                        warning_content+="<li>";
                        warning_content+= firstIndex+" & "+(firstIndex+1);
                        warning_content+="</li>";
            			
                       
                    }else{
                       
                    }
            		
                    enddate = end_date_cls;
            	}
            	
            }
            //warning_content+="</ul></div>";
            if(error_flag){
            	$(".message_content").append(warning_content);
            	$(".warning_gap").show();
            	
            }else{
            	$(".warning_gap").hide();
            }
            
//    	}
    });
	
}