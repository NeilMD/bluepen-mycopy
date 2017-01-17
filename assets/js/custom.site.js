
var options;
var checkboxes = 
[
    
    $('#field-site'),
    $('#field-mon'),
    $('#field-year'),
    $('#field-loc'),
    $('#field-prov'),
    $('#field-city'),
    $('#field-street'),
  
    $('#field-rent'),
    $('#field-format'),
    $('#field-cpsf'),
    $('#field-acpsf'),    
    $('#field-cpm'),
    $('#field-acpm'),
    $('#field-traffic'),
    $('#field-score'),
    $('#field-neta'),
    $('#field-x'),
    $('#field-y'),
    $('#field-remarks'),
    $('#field-suppname'),
    $('#field-suppcontact'),
    $('#field-suppemail'),
    $('#field-mat'),
    $('#field-matcat'),
    $('#field-matsubcat'),
    $('#field-h'),
    $('#field-ah'),
    $('#field-w'),
    $('#field-aw')

];

var currentRow, currentName;

 
$(document).ready(function(){
   
     
    function getCheckboxValue(){
        var value = [];
        console.log(checkboxes.length);
        for(var x = 0; x < checkboxes.length; x++){
            
            
            value.push($(checkboxes[x]).val());
            

        }
        return value;
    }
     
    function change(field,value){
        if($(value).hasClass('zmdi-close')){
            field.prop('checked',false);
           
        }else if($(value).hasClass('zmdi-check')){
            field.prop('checked',true);        
           
        }

    }
     
    function resetCheckBox(){
        
        $("input[type=text]").empty();
        
    }
    function fillUp(row){
    	 
    	 checkboxes[0].val(row[0]);
    	 checkboxes[1].val(row[1]);
    	 checkboxes[2].val(row[2]);

    	 checkboxes[3].val(row[6]);
    	 checkboxes[4].val(row[3]);
    	 checkboxes[5].val(row[4]);

    	 checkboxes[6].val(row[5]);
    	 checkboxes[7].val(row[14]);
    	 checkboxes[8].val(row[19]);

    	 checkboxes[9].val(row[15]);
    	 checkboxes[10].val(row[16]);
    	 checkboxes[11].val(row[17]);

    	 checkboxes[12].val(row[18]);
    	 checkboxes[13].val(row[22]);
    	 checkboxes[14].val(row[23]);

    	 checkboxes[15].val(row[24]);
    	 checkboxes[16].val(row[20]);
    	 checkboxes[17].val(row[21]);

    	 checkboxes[18].val(row[25]);
    	 checkboxes[19].val(row[7]);
    	 checkboxes[20].val(row[8]);

    	 checkboxes[21].val(row[9]);
    	 checkboxes[22].val(row[26]);
    	 checkboxes[23].val(row[27]);

    	 checkboxes[24].val(row[28]);
    	 checkboxes[25].val(row[10]);
    	 checkboxes[26].val(row[12]);

    	 checkboxes[27].val(row[11]);
    	 checkboxes[28].val(row[13]);
    	 

    	 
    }
    function arrayInsert(){
    	var temp = [];
    	temp.push(checkboxes[0].val());
    	temp.push(checkboxes[1].val());
    	temp.push(checkboxes[2].val());

    	temp.push(checkboxes[4].val());
    	temp.push(checkboxes[5].val());
    	temp.push(checkboxes[3].val());
    	temp.push(checkboxes[6].val());
    	temp.push(checkboxes[19].val());

    	temp.push(checkboxes[20].val());
    	temp.push(checkboxes[21].val());
    	temp.push(checkboxes[25].val());

    	temp.push(checkboxes[27].val());
    	temp.push(checkboxes[26].val());
    	temp.push(checkboxes[28].val());

    	temp.push(checkboxes[7].val());
    	temp.push(checkboxes[9].val());
    	temp.push(checkboxes[10].val());

    	temp.push(checkboxes[11].val());
    	temp.push(checkboxes[12].val());
    	temp.push(checkboxes[8].val());

    	temp.push(checkboxes[16].val());
    	temp.push(checkboxes[17].val());
    	temp.push(checkboxes[13].val());

    	temp.push(checkboxes[14].val());
    	temp.push(checkboxes[15].val());
    	temp.push(checkboxes[18].val());

    	temp.push(checkboxes[22].val());
    	temp.push(checkboxes[23].val());
    	temp.push(checkboxes[24].val());

    	return temp;

    }

    function add(check, notCheck,name,array){
        // add to the beginning of array
     
        var insert = [];
        insert.push(name);
        for(var y = 0; y < array.length; y++){
            if(array[y]){
                insert.push(check);
            }else if(!array[y]){
                insert.push(notCheck);
            }
        }
        insert.push(td26);
        var rowNode = table.row.add(insert).node();


        $(rowNode).find('td').css( 'text-align','center');
        $(rowNode).find('td:first').css('text-align','left');
        table.draw();

    }
    function edit(check, notCheck,name,array){
        // add to the beginning of array
     
        var insert = [];
        insert.push(name);
        for(var y = 0; y < array.length; y++){
            if(array[y]){
                insert.push(check);
            }else if(!array[y]){
                insert.push(notCheck);
            }
        }
        insert.push(td26);
        var rowNode = table.row.add(insert ).draw().node();


            $(rowNode).find('td').css( 'text-align','center');
            $(rowNode).find('td:first').css('text-align','left');
            table.draw();

    }

   
     
    

  
    var table = $('#datatable-editable').DataTable();

    //DELETE
    $(table.table().container()).on( 'click', 'a.remove-row', function () {
    
	    var row = table.row( this ).index();
	    var target = table.row(row).data()[0];
	    var target1 = table.row(row).data()[1];
	    var target2 = table.row(row).data()[2];
	    console.log(target+target1+target2);
	    
	    var x  = confirm("Are you sure to delete this group?");
	    // if(x)
	    // $.ajax({
	    //     type:"POST",
	    //     url: '/index.php/adminoperations/removegroup',
	    //     data:{'target':target},
	    //     success:function(data){
	    //         if(data){
	    //             table.row( row ).remove().draw();
	    //             alert("Success!");
	    //         }
	    //     }
	    // })

        // $(table).fixedColumns().update();
        table.row( row ).remove().draw();
    });


    //EDIT
    $(table.table().container()).on('click',' a.edit-row ',function(){
          
        var row = table.row( this ).index();

        currentRow = row;

        console.log(table.row(row).data()); 
        $('#title').html("Edit");
        // Fills up the checkboxes
        fillUp(table.row(row).data());

        row  = table.row(row).data();
        console.log(row[0]+'Name:');
        currentName = row[0];

        $('#add').modal('show');

       
        
           

        
    });
   

    var td26 = '<td class="actions text-center" text-align="center">'+
                 '<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>'+
                '<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>'+
                '<a href="#" class="on-default edit-row" style="padding:5px"><i class="fa fa-pencil"></i></a>'+
                '<a href="#" class="on-default remove-row" style="padding:5px"><i class="fa fa-trash-o"></i></a>'+
                '</td>';

    //Add
    $('#addToTable').click(function () {
        // $(table).fixedColumns().update();

        // console.log($(table).fixedColumns().rowIndex());
        
        $('#title').html("Add");
        resetCheckBox();
        console.log('asd');
        $('#add').modal('show');



        
        

    } );

    $('#save').click(function(){
        // Add method passess check object and close
        
        $('#add').modal('hide');
	    var current = $("#title").html();
	    if(current == "Edit"){
	    	table.row( currentRow ).remove().draw();
	        
	        
	     	//GetValue
	        var value =  arrayInsert(); 
	        value.push(td26);


	        // Add to datatable
	        var rowNode = table.row.add(value).draw().node();	        
	        $(rowNode).find('td').css( 'text-align','center');
	        $(rowNode).find('td:first').css('text-align','left');
	        table.draw();
	    }
	    else if(current == "Add"){
	    	//remove current row
	    	
	    	//Get Value
	    	 var value =  arrayInsert(); 
	        value.push(td26);

	    	//addrow
	    	 var rowNode = table.row.add(value).draw().node();	        
	        $(rowNode).find('td').css( 'text-align','center');
	        $(rowNode).find('td:first').css('text-align','left');
	        table.draw();

	    }
        
    });
    //  $('#save-edit').click(function(){
    //     $('#edit').modal('hide');   
    //     var name = $('#field-1').val();
    //     var value =  getCheckboxValue(); 
       
    //     var select = new Array();
    //     var mode = 'exclude';
        
    //     if($('#mat-rad2').is(":checked")){
    //         console.log('FistIF');
    //         if($('#material-select-include').val() instanceof Array){
    //             mode = 'include';
    //             console.log('FisestIF');
    //             select = $('#material-select-include').val();
    //         }else{
    //             select = $('#material-select-exclude').val();
    //         }

    //     }
        
         
            
       
    //     var json = [];
    //     var con = [];
    //     for(var z = 0; z < value.length; z++){
    //         if(z > 7 && z < 11){
    //             con.push(value[z]);
    //         }else{
    //             json.push(value[z]);
    //         }
    //     }
       
    //     newJson = json.concat(con);
    //     console.log(newJson);
    //     $.ajax({
    //         type: 'POST',
    //         url:'/index.php/adminoperations/addgroup',
    //         data: {'status':'edit',
    //                 'groupname':name,
    //                 'groupinfo':'hello',
    //                 'privileges': value,
    //                 'materials':select,
    //                 'mode':mode,
    //                 'target': currentName},
    //         success:function(data){
                
    //             if(data == '1'){
    //                 alert('Success!');
    //                 add('<i class="zmdi zmdi-check "></i>','<i class="zmdi zmdi-close "></i>',name,value);    
    //                 table.row(currentRow).remove().draw();
    //                 currentRow = -1;    
                    
    //             }
    //             else{
    //                 alert('Failed!');
    //             }
    //         }
    //     });
        
    // }); 
    // disbaled incude or exclude
    





    // reset checkbox everytime modal is closed
    // $(document).on('hidden.bs.modal', function () {
    //     resetCheckBox();
    //     $("select.select2").val(null).change();
    //     $("select.select2").prop('disabled',"''");
    //     $('#field-1').val('');
    //     $('#field-1-add').val('');

         
    // })
    // table.draw();  





});





