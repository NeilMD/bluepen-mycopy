
var options;
var checkboxes = 
[
    $('#checkbox11'),
    $('#checkbox12'),
    $('#checkbox13'),
    $('#checkbox14'),
    $('#checkbox15'),
    $('#checkbox920'),
    $('#checkbox921'),
    $('#checkbox922'),
  
    $('#checkbox31'),
    $('#checkbox32'),
    $('#checkbox33'),
    $('#checkbox34'),    
    $('#checkbox16'),
    $('#checkbox17'),
    $('#checkbox18'),
    $('#checkbox19'),
    $('#checkbox110'),
    $('#checkbox111'),
    $('#checkbox220'),
    $('#checkbox221'),
    $('#checkbox41'),
    $('#checkbox42'),
    $('#checkbox43'),
    $('#checkbox112'),
    $('#checkbox211'),
    $('#checkbox212'),
    $('#checkbox213')

];

var currentRow, currentName;

var checkboxesAdd = 
[
    $('#checkbox11-add'),
    $('#checkbox12-add'),
    $('#checkbox13-add'),
    $('#checkbox14-add'),
    $('#checkbox15-add'),
    $('#checkbox920-add'),
    $('#checkbox921-add'),
    $('#checkbox922-add'),
   
    $('#checkbox31-add'),
    $('#checkbox32-add'),
    $('#checkbox33-add'),
    $('#checkbox34-add'),    
    $('#checkbox16-add'),
    $('#checkbox17-add'),
    $('#checkbox18-add'),
    $('#checkbox19-add'),
    $('#checkbox110-add'),
    $('#checkbox111-add'),
    $('#checkbox220-add'),
    $('#checkbox221-add'),
    $('#checkbox41-add'),
    $('#checkbox42-add'),
    $('#checkbox43-add'),
    $('#checkbox112-add'),
     $('#checkbox211-add'),
    $('#checkbox212-add'),
    $('#checkbox213-add')

];
var header = {

    'site':[$('#checkbox1'),
            $('#checkbox11'),
            $('#checkbox12'),
            $('#checkbox13'),
            $('#checkbox14'),
            $('#checkbox15'),
            $('#checkbox16'),
            $('#checkbox17'),
            $('#checkbox18'),
            $('#checkbox19'),
            $('#checkbox110'),
            $('#checkbox111'),
            $('#checkbox112')],

   'supplier':[$('#checkbox2'),
               $('#checkbox920'),
               $('#checkbox921'),
               $('#checkbox922')],
    'material':[$('#checkbox21'),
                $('#checkbox211'),
                $('#checkbox212'),
                $('#checkbox213')],
    

    'msize':[$('#checkbox3'),
             $('#checkbox31'),
             $('#checkbox32'),
             $('#checkbox34'),
             $('#checkbox33')],

    'xy':[$('#checkbox22'),
          $('#checkbox220'),
          $('#checkbox221')],
    'site-eval':[$('#checkbox4'),                
                 $('#checkbox41'),
                 $('#checkbox42'),
                 $('#checkbox43')]
    

};
var headerAdd = {

    'site':[$('#checkbox1-add'),
            $('#checkbox11-add'),
            $('#checkbox12-add'),
            $('#checkbox13-add'),
            $('#checkbox14-add'),
            $('#checkbox15-add'),
            $('#checkbox16-add'),
            $('#checkbox17-add'),
            $('#checkbox18-add'),
            $('#checkbox19-add'),
            $('#checkbox110-add'),
            $('#checkbox111-add'),
            $('#checkbox112-add')],

   'supplier':[$('#checkbox2-add'),
               $('#checkbox920-add'),
               $('#checkbox921-add'),
               $('#checkbox922-add')],
    'material':[$('#checkbox21-add'),
                $('#checkbox211-add'),
                $('#checkbox212-add'),
                $('#checkbox213-add')],
    

    'msize':[$('#checkbox3-add'),
             $('#checkbox31-add'),
             $('#checkbox32-add'),
             $('#checkbox34-add'),
             $('#checkbox33-add')],

    'xy':[$('#checkbox22-add'),
          $('#checkbox220-add'),
          $('#checkbox221-add')],
    'site-eval':[$('#checkbox4-add'),
                 $('#checkbox41-add'),                
                 $('#checkbox42-add'),
                 $('#checkbox43-add')]
    

};


$(document).ready(function(){
   
    //function to fill up rows
    function fillUp(row){
        $('#field-1').val(row[0]);
        for(var x = 0; x < checkboxes.length; x++){
            change(checkboxes[x],row[x+1]);
        }
        checkHeader();
        

    }
    function getCheckboxValue(){
        var value = [];
        console.log(checkboxes.length);
        for(var x = 0; x < checkboxes.length; x++){
            console.log($(checkboxes[x]).prop('checked'));
            if($(checkboxes[x]).prop('checked'))
                value.push(true);
            else{
                value.push(false);
            }

        }
        return value;
    }
    function getCheckboxValueAdd(){
        var value = [];
        console.log(checkboxesAdd.length);
        for(var x = 0; x < checkboxesAdd.length; x++){
            console.log($(checkboxesAdd[x]).prop('checked'));
            if($(checkboxesAdd[x]).prop('checked'))
                value.push(true);
            else{
                value.push(false);
            }

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
    function checkHeader(){

        // for(var x = 0; x < header.size; x++){
        //     console.log('Head');
        // }
        for(var key in header){
           
            check = true;
            for(var item in header[key]){
                if(item > 0){
                   
                    // check for each item if one of them is false.
                    // Header will not be set to check
                    if(!$(header[key][item][0]).prop("checked")){
                        check = false;
                      
                    }
                }
            }
            // Check header if all sub fields are checked
            if(check){
               
                $(header[key][0][0]).prop('checked',true);
            }
        }
    }
    function checkHeaderAdd(){

        // for(var x = 0; x < header.size; x++){
        //     console.log('Head');
        // }
        for(var key in headerAdd){
           
            check = true;
            for(var item in headerAdd[key]){
                if(item > 0){
                   
                    // check for each item if one of them is false.
                    // Header will not be set to check
                    if(!$(headerAdd[key][item][0]).prop("checked")){
                        check = false;
                      
                    }
                }
            }
            // Check header if all sub fields are checked
            if(check){
               
                $(headerAdd[key][0][0]).prop('checked',true);
            }
        }
    }
    function resetCheckBox(){
        
        $("input[type=checkbox]").attr('checked',false);
        $("input[type=radio]").attr('checked',false);
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

    console.log(table);
     
    var data2;
    $.ajax({
        type:"GET",
        url: '/index.php/adminoperations/getdistinctmaterials',
        dataType:'json',
        success:function(data){
            console.log(data);
            options = data;
            $(".select2").select2({            
                data:data,
                width:"70%",
                allowClear: true,


            });
         
        }
    });

    // radio js all and custom
    $('input[type=radio][name=mat-rad-add]').change(function(){
        console.log('Mat-rad');
        if($('#mat-rad2-add').is(':checked')){
            if($(this).is(':checked')){
                $('#material-select-include-add').removeAttr('disabled');
                $('#material-select-exclude-add').removeAttr('disabled');
            }

        }
        else{
                console.log('Mat-rad-false');
                $('#material-select-include-add').attr('disabled','""');
                $('#material-select-exclude-add').attr('disabled','""');   
                $("select.select2").val(null).change();
            }
    });
     $('input[type=radio][name=mat-rad]').change(function(){
        console.log('Mat-rad');
        if($('#mat-rad2').is(':checked')){
            
            if($('#material-select-include').val() instanceof Array){
                $('#material-select-include').removeAttr('disabled');    
            }
            else if($('#material-select-exclude').val() instanceof Array){
                $('#material-select-exclude').removeAttr('disabled');    
            }
            else{
                $('#material-select-include').removeAttr('disabled');    
                $('#material-select-exclude').removeAttr('disabled');    
            }
                 
                
            

        }
        else{
                console.log('Mat-rad-false');
                $('#material-select-include').attr('disabled','""');
                $("select.select2").val(null).change();
                $('#material-select-exclude').attr('disabled','""');   
            }
    });

     $('select.select2').on('change',function(){
        console.log('EMPTYSDF');
        if($(this).val() instanceof Array){
           
        }
        else{
            
             if($("input[type=radio][name=mat-rad]").is(":checked")){
                console.log('PUMASOKSASD');
                $('#material-select-include').removeProp('disabled');
                $('#material-select-exclude').removeProp('disabled');

                $('#material-select-include-add').removeProp('disabled');
                $('#material-select-exclude-add').removeProp('disabled');
                
             }
            
        }
        
    });
    
        
    // $('#my_multi_select3').multiSelect({
    //
    //     selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
    //     selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
    //     afterInit: function (ms) {
    //         var that = this,
    //             $selectableSearch = that.$selectableUl.prev(),
    //             $selectionSearch = that.$selectionUl.prev(),
    //             selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
    //             selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';
    //
    //         that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
    //             .on('keydown', function (e) {
    //                 if (e.which === 40) {
    //                     that.$selectableUl.focus();
    //                     return false;
    //                 }
    //             });
    //
    //         that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
    //             .on('keydown', function (e) {
    //                 if (e.which == 40) {
    //                     that.$selectionUl.focus();
    //                     return false;
    //                 }
    //             });
    //     },
    //     afterSelect: function () {
    //         this.qs1.cache();
    //         this.qs2.cache();
    //     },
    //     afterDeselect: function () {
    //         this.qs1.cache();
    //         this.qs2.cache();
    //     }
    // });

    




    var table = $('#datatable-editable').DataTable();

    $(table.table().container()).on( 'click', 'a.remove-row', function () {
    
    var row = table.row( this ).index();
    var target = table.row(row).data()[0];
    console.log(target);
    
    var x  = confirm("Are you sure to delete this group?")
    if(x)
    $.ajax({
        type:"POST",
        url: '/index.php/adminoperations/removegroup',
        data:{'target':target},
        success:function(data){
            if(data){
                table.row( row ).remove().draw();
                alert("Success!");
            }
        }
    })

        // $(table).fixedColumns().update();
    });

    $(table.table().container()).on('click',' a.edit-row ',function(){
          
        var row = table.row( this ).index();

        currentRow = row;

        console.log(table.row(row).data()); 

        // Fills up the checkboxes
        fillUp(table.row(row).data());
        row  = table.row(row).data();
        console.log(row[0]+'Name:');
        currentName = row[0];

        $.ajax({
            type:"POST",
            url: '/index.php/adminoperations/getmaterialsofgroup',
            data: {'group_name':row[0]},

            success:function(data){
                console.log(data);
                var mode = data['mode'];
                var names = "";
                names = data["materials"];
                console.log(data);
                console.log("asdasdasdasdasd");
                if(names.length == 0){
                    mode = "all";
                }
                else{
                    var names2=[];
                    temp = [];
                    for(ctr = 0; ctr < names.length; ctr++){
                        id = names[ctr];
                        a_key = names[ctr];
                        temp.push(id);
                        temp.push(a_key);

                        names2.push(temp);
                        
                    }
                    console.log(names);
                    console.log("HASd");
                }
                if(mode == "all"){
                    $('#mat-rad').prop('checked',true);
                }
                else if(mode == "include"){
                 $('#mat-rad2').prop('checked',true);
                 $('#material-select-exclude').attr('disabled',"''");
                 $('#material-select-include').removeAttr("disabled");
                 $('#material-select-include').select2('val',names2 );
                }else if(mode == "exclude"){                   
                    $('#mat-rad2').prop('checked',true);
                     $('#material-select-include').attr('disabled',"''");
                     $('#material-select-exclude').removeAttr("disabled");
                    $('#material-select-exclude').select2('val',names2 );
                }
                    
                console.log($('.select2').val());
                $('.select2').trigger("change");

                $('#edit-name').html(row[0]);
                $('#edit').modal('show');
                }
            
        });
       
        
           

        
    });
    $('#checkbox920, #checkbox921, #checkbox922, #checkbox211, #checkbox212, #checkbox213,#checkbox220, #checkbox221,#checkbox11, #checkbox12, #checkbox13, #checkbox14, #checkbox15, #checkbox16, #checkbox17, #checkbox18, #checkbox19, #checkbox110, #checkbox111,#checkbox112, #checkbox31, #checkbox32, #checkbox33, #checkbox34,#checkbox41, #checkbox42, #checkbox43').change(function(){
        if(!$(this).is(':checked')){


            if($(this).attr('id') == 'checkbox920' || $(this).attr('id') == 'checkbox921' || $(this).attr('id') == 'checkbox922'){
                 $("#checkbox2 ").attr('checked',false);
            }else if($(this).attr('id') == 'checkbox211' || $(this).attr('id') == 'checkbox212' || $(this).attr('id') == 'checkbox213'){
                $("#checkbox21 ").attr('checked',false);
            }else if( $(this).attr('id') == 'checkbox220' || $(this).attr('id') == 'checkbox221' ){
                 $("#checkbox22 ").attr('checked',false);
            }else if( $(this).attr('id') == 'checkbox11' || $(this).attr('id') == 'checkbox12' || $(this).attr('id') == 'checkbox13' || $(this).attr('id') == 'checkbox14' ||$(this).attr('id') == 'checkbox15' || $(this).attr('id') == 'checkbox16' ||$(this).attr('id') == 'checkbox17' || $(this).attr('id') == 'checkbox18' ||$(this).attr('id') == 'checkbox19' || $(this).attr('id') == 'checkbox110' ||$(this).attr('id') == 'checkbox111'||$(this).attr('id') == 'checkbox112'){
                 $("#checkbox1").attr('checked',false);
            }else if($(this).attr('id') == 'checkbox31' || $(this).attr('id') == 'checkbox32' || $(this).attr('id') == 'checkbox33' || $(this).attr('id') == 'checkbox34'){
                 $("#checkbox3").attr('checked',false);
            }else if($(this).attr('id') == 'checkbox41' || $(this).attr('id') == 'checkbox42' || $(this).attr('id') == 'checkbox43' ){
                 $("#checkbox4").attr('checked',false);
            }



        }
        console.log('event');
        checkHeader();
    });
    $('#checkbox920-add, #checkbox921-add, #checkbox922-add, #checkbox211-add, #checkbox212-add, #checkbox213-add, #checkbox220-add, #checkbox221-add, #checkbox11-add, #checkbox12-add, #checkbox13-add, #checkbox14-add, #checkbox15-add, #checkbox16-add, #checkbox17-add, #checkbox18-add, #checkbox19-add, #checkbox110-add, #checkbox111-add, #checkbox112-add, #checkbox31-add, #checkbox32-add, #checkbox33-add, #checkbox34-add,#checkbox41-add, #checkbox42-add, #checkbox43-add').change(function(){
        if(!$(this).is(':checked')){


            if($(this).attr('id') == 'checkbox920-add' || $(this).attr('id') == 'checkbox921-add' || $(this).attr('id') == 'checkbox922-add'){
                 $("#checkbox2-add ").attr('checked',false);
            }else if($(this).attr('id') == 'checkbox211-add' || $(this).attr('id') == 'checkbox212-add' || $(this).attr('id') == 'checkbox213-add'){
                $("#checkbox21-add ").attr('checked',false);
            }else if( $(this).attr('id') == 'checkbox220-add' || $(this).attr('id') == 'checkbox221-add' ){
                 $("#checkbox22-add ").attr('checked',false);
            }else if( $(this).attr('id') == 'checkbox11-add' || $(this).attr('id') == 'checkbox12-add' || $(this).attr('id') == 'checkbox13-add' || $(this).attr('id') == 'checkbox14-add' ||$(this).attr('id') == 'checkbox15-add' || $(this).attr('id') == 'checkbox16-add' ||$(this).attr('id') == 'checkbox17-add' || $(this).attr('id') == 'checkbox18-add' ||$(this).attr('id') == 'checkbox19-add' || $(this).attr('id') == 'checkbox110-add' ||$(this).attr('id') == 'checkbox111-add'||$(this).attr('id') == 'checkbox112-add'){
                 $("#checkbox1-add").attr('checked',false);
            }else if($(this).attr('id') == 'checkbox31-add' || $(this).attr('id') == 'checkbox32-add' || $(this).attr('id') == 'checkbox33-add' || $(this).attr('id') == 'checkbox34-add'){
                 $("#checkbox3-add").attr('checked',false);
            }else if($(this).attr('id') == 'checkbox41-add' || $(this).attr('id') == 'checkbox42-add' || $(this).attr('id') == 'checkbox43-add' ){
                 $("#checkbox4-add").attr('checked',false);
            }


        }
        console.log('event-add');
            checkHeaderAdd();
    });
    //  $(document).on( 'click', 'tr', function () {
    //     var row = table.row( this );
    //     console.log('Neil');
    //       $("tr a.edit-row").DataTable().fixedColumns().rowIndex()
    //      // console.log(table.row(row.index()).data());
    //     console.log( row.index());
    // } );



        /*$(this).is(':checked')
          $(this).attr('id')
        */
    
    



    $('#checkbox2, #checkbox21, #checkbox22, #checkbox1, #checkbox3, #checkbox4').change(function(){
        console.log(this);

        if( $(this).attr('id') == 'checkbox2' && $(this).is(':checked') ){

            $("#checkbox920, #checkbox921, #checkbox922 ").prop('checked',true);


        }else if($(this).attr('id') == 'checkbox21' && $(this).is(':checked')){

            $("#checkbox211, #checkbox212, #checkbox213").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox22'&& $(this).is(':checked')){

            $("#checkbox220, #checkbox221").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox1' && $(this).is(':checked')){

            $("#checkbox11, #checkbox12, #checkbox13, #checkbox14, #checkbox15, #checkbox16, #checkbox17, #checkbox18, #checkbox19, #checkbox110, #checkbox111,  #checkbox112").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox3' && $(this).is(':checked')){

            $("#checkbox31, #checkbox32, #checkbox33, #checkbox34").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox4' && $(this).is(':checked')){
            $("#checkbox41, #checkbox42, #checkbox43 ").prop('checked', true);
        }

        /* IF FALSE*/

        if( $(this).attr('id') == 'checkbox2' && !$(this).is(':checked') ){

            $("#checkbox920, #checkbox921, #checkbox922 ").attr('checked',false);


        }else if($(this).attr('id') == 'checkbox21' && !$(this).is(':checked')){

            $("#checkbox211, #checkbox212, #checkbox213").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox22'&& !$(this).is(':checked')){

            $("#checkbox220, #checkbox221").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox1' && !$(this).is(':checked')){

            $("#checkbox11, #checkbox12, #checkbox13, #checkbox14, #checkbox15, #checkbox16, #checkbox17, #checkbox18, #checkbox19, #checkbox110, #checkbox111, #checkbox112").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox3' && !$(this).is(':checked')){

            $("#checkbox31, #checkbox32, #checkbox33, #checkbox34").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox4' && !$(this).is(':checked')){
            $("#checkbox41, #checkbox42, #checkbox43 ").attr('checked', false);
        }



    });

    //add
    $('#checkbox2-add, #checkbox21-add, #checkbox22-add, #checkbox1-add, #checkbox3-add, #checkbox4-add').change(function(){
        console.log(this);

        if( $(this).attr('id') == 'checkbox2-add' && $(this).is(':checked') ){

            $("#checkbox920-add, #checkbox921-add, #checkbox922-add ").prop('checked',true);


        }else if($(this).attr('id') == 'checkbox21-add' && $(this).is(':checked')){

            $("#checkbox211-add, #checkbox212-add, #checkbox213-add").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox22-add'&& $(this).is(':checked')){

            $("#checkbox220-add, #checkbox221-add").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox1-add' && $(this).is(':checked')){

            $("#checkbox11-add, #checkbox12-add, #checkbox13-add, #checkbox14-add, #checkbox15-add, #checkbox16-add, #checkbox17-add, #checkbox18-add, #checkbox19-add, #checkbox110-add, #checkbox111-add,  #checkbox112-add").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox3-add' && $(this).is(':checked')){

            $("#checkbox31-add, #checkbox32-add, #checkbox33-add, #checkbox34-add").prop('checked',  true);

        }else if($(this).attr('id') == 'checkbox4-add' && $(this).is(':checked')){
            $("#checkbox41-add, #checkbox42-add, #checkbox43-add ").prop('checked', true);
        }

        /* IF FALSE*/

        if( $(this).attr('id') == 'checkbox2-add' && !$(this).is(':checked') ){

            $("#checkbox920-add, #checkbox921-add, #checkbox922-add ").attr('checked',false);


        }else if($(this).attr('id') == 'checkbox21-add' && !$(this).is(':checked')){

            $("#checkbox211-add, #checkbox212-add, #checkbox213-add").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox22-add'&& !$(this).is(':checked')){

            $("#checkbox220-add, #checkbox221-add").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox1-add' && !$(this).is(':checked')){

            $("#checkbox11-add, #checkbox12-add, #checkbox13-add, #checkbox14-add, #checkbox15-add, #checkbox16-add, #checkbox17-add, #checkbox18-add, #checkbox19-add, #checkbox110-add, #checkbox111-add, #checkbox112-add").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox3-add' && !$(this).is(':checked')){

            $("#checkbox31-add, #checkbox32-add, #checkbox33-add, #checkbox34-add").attr('checked',  false);

        }else if($(this).attr('id') == 'checkbox4-add' && !$(this).is(':checked')){
            $("#checkbox41-add, #checkbox42-add, #checkbox43-add ").attr('checked', false);
        }



    });

       
        // Delete
    
    

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
        
        
        console.log('asd');
        $('#add').modal('show');



        
        

    } );

    $('#save-add').click(function(){
        // Add method passess check object and close
        
        $('#add').modal('hide');
        console.log(currentRow + ": Neil");
        
        var name = $('#field-1-add').val();
        var value =  getCheckboxValueAdd(); 
        var select= new Array();
        var mode = 'exclude';
        
        if($('#mat-rad2-add').is(":checked")){
            console.log('FistIF');
            if($('#material-select-include-add').val() instanceof Array){
                mode = 'include';
                console.log('FisestIF');
                select = $('#material-select-include-add').val();
            }else{
                select = $('#material-select-exclude-add').val();
            }

        }
        console.log(name);
        console.log(getCheckboxValue);
        var json = [];
        var con = [];
        for(var z = 0; z < value.length; z++){
            if(z > 7 && z < 11){
                con.push(value[z]);
            }else{
                json.push(value[z]);
            }

        }
        
        newJson = json.concat(con);
        console.log(newJson);
        $.ajax({
            type: 'POST',
            url:'/index.php/adminoperations/addgroup',
            data: {'status':'add',
                    'groupname':name,
                    'groupinfo':'hello',
                    'privileges': value,
                    'materials[]':select,
                    "mode":mode},
            success:function(data){
                
                if(data == '1'){
                    alert('Success!');
                    add('<i class="zmdi zmdi-check "></i>','<i class="zmdi zmdi-close "></i>',name,value);        
                    table.draw();
                }
                else{
                    alert('Failed!');
                }
            }
        });
        
    });
     $('#save-edit').click(function(){
        $('#edit').modal('hide');   
        var name = $('#field-1').val();
        var value =  getCheckboxValue(); 
       
        var select = new Array();
        var mode = 'exclude';
        
        if($('#mat-rad2').is(":checked")){
            console.log('FistIF');
            if($('#material-select-include').val() instanceof Array){
                mode = 'include';
                console.log('FisestIF');
                select = $('#material-select-include').val();
            }else{
                select = $('#material-select-exclude').val();
            }

        }
        
         
            
        console.log(select);
        console.log(name);
        console.log(value);
        var json = [];
        var con = [];
        for(var z = 0; z < value.length; z++){
            if(z > 7 && z < 11){
                con.push(value[z]);
            }else{
                json.push(value[z]);
            }
        }
       
        newJson = json.concat(con);
        console.log(newJson);
        $.ajax({
            type: 'POST',
            url:'/index.php/adminoperations/addgroup',
            data: {'status':'edit',
                    'groupname':name,
                    'groupinfo':'hello',
                    'privileges': value,
                    'materials':select,
                    'mode':mode,
                    'target': currentName},
            success:function(data){
                
                if(data == '1'){
                    alert('Success!');
                    add('<i class="zmdi zmdi-check "></i>','<i class="zmdi zmdi-close "></i>',name,value);    
                    table.row(currentRow).remove().draw();
                    currentRow = -1;    
                    
                }
                else{
                    alert('Failed!');
                }
            }
        });
        
    }); 
    // disbaled incude or exclude
    $("#material-select-include").change(function(){
       
        if( ($(this).val() instanceof Array)){
            $("#material-select-exclude").attr('disabled',"''");
             
        }


    });
    $("#material-select-exclude").change(function(){
       if( ($(this).val() instanceof Array)){
            $("#material-select-include").attr('disabled','""');
            
        }
    });

    $("#material-select-include-add").change(function(){
      
        if( ($(this).val() instanceof Array)){

            $("#material-select-exclude-add").attr('disabled','""');
            
        }
    });
    $("#material-select-exclude-add").change(function(){
       if( ($(this).val() instanceof Array)){
            $("#material-select-include-add").attr('disabled','""');
            
        }
    });

    // $('select.select2').change(function(){
    //     if($(this).val() instanceof Array){

    //     }
    //     else{
    //         if($("#mat-rad2-add").is(":checked") || $("#mat-rad2").is(":checked")){
    //             $('select.select2').removeAttr('disabled');
    //         }
    //     }
    // });





    // reset checkbox everytime modal is closed
    $(document).on('hidden.bs.modal', function () {
        resetCheckBox();
        $("select.select2").val(null).change();
        $("select.select2").prop('disabled',"''");
        $('#field-1').val('');
        $('#field-1-add').val('');

         
    })
    table.draw();  





});





