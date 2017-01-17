 
var status = '';
var targetuser = [];
(function( $ ) {

	'use strict';
	
	var EditableTable = {

		options: {
			autoWidth: false,
			addButton: '#addToTable',
			table: '#datatable-editable',
			dialog: {
				wrapper: '#dialog',
				cancelButton: '#dialogCancel',
				confirmButton: '#dialogConfirm',
			}
		},

		initialize: function() {
			this
			.setVars()
			.build()
			.events();
		},

		setVars: function() {
			this.$table				= $( this.options.table );
			this.$addButton			= $( this.options.addButton );

			// dialog
			this.dialog				= {};
			this.dialog.$wrapper	= $( this.options.dialog.wrapper );
			this.dialog.$cancel		= $( this.options.dialog.cancelButton );
			this.dialog.$confirm	= $( this.options.dialog.confirmButton );

			return this;
		},

		build: function() {
			this.datatable = this.$table.DataTable({
				aoColumns: [
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				{ "bSortable": false }
				]
			});

			window.dt = this.datatable;

			return this;
		},

		events: function() {
			var _self = this;

			this.$table
			.on('click', 'a.save-row', function( e ) {
				e.preventDefault();

				_self.rowSave( $(this).closest( 'tr' ) );
			})
			.on('click', 'a.cancel-row', function( e ) {
				e.preventDefault();

				_self.rowCancel( $(this).closest( 'tr' ) );
			})
			.on('click', 'a.edit-row', function( e ) {
				e.preventDefault();

				_self.rowEdit( $(this).closest( 'tr' ) );
			})
			.on( 'click', 'a.remove-row', function( e ) {
				e.preventDefault();
				alert('asd');

				var $row = $(this).closest( 'tr' );

				var ctr = 0;
				$($row).find('td').each(function(){				 
					targetuser.push($(this).text());
				});
				console.log(targetuser[2]);

				$.ajax({
					type: "POST",
					url: '/index.php/adminoperations/removeuser',
					data: {'targetuser':targetuser[2]},
					success:function(data){
						console.log(data);
						_self.rowRemove( $row);
						targetuser = [];
					}
				});	






					/*    -- Substitute maginificpop not owrkings
					$.magnificPopup.open({
						items: {
							src: _self.options.dialog.wrapper,
							type: 'inline'
						},
						preloader: false,
						modal: true,
						callbacks: {
							change: function() {
								_self.dialog.$confirm.on( 'click', function( e ) {
									e.preventDefault();

									_self.rowRemove( $row );
									$.magnificPopup.close();
								});
							},
							close: function() {
								_self.dialog.$confirm.off( 'click' );
							}
						}
					});*/
				});

			this.$addButton.on( 'click', function(e) {
				e.preventDefault();

				_self.rowAdd();
			});

			this.dialog.$cancel.on( 'click', function( e ) {
				e.preventDefault();
				$.magnificPopup.close();
			});

			return this;
		},

		// ==========================================================================================
		// ROW FUNCTIONS
		// ==========================================================================================
		rowAdd: function() {
			status = "add";
			this.$addButton.attr({ 'disabled': 'disabled' });

			var actions,
			data,
			$row;
			

			actions = [
			'<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>',
			'<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>',
			'<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>',
			'<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>'
			].join(' ');

			data = this.datatable.row.add([ '', '', '','','','','','','', actions ]);
			$row = this.datatable.row( data[0] ).nodes().to$();

			$row
			.addClass( 'adding' )
			.find( 'td:last' )
			.addClass( 'actions' );

			this.rowEdit( $row );
			//edit




			//end edit
			this.datatable.order([0,'asc']).draw(); // always show fields
			$('select').select2();
		},

		rowCancel: function( $row ) {
			status = "none";
			var _self = this,
			$actions,
			i,
			data;

			if ( $row.hasClass('adding') ) {
				this.rowRemove( $row );
			} else {

				data = this.datatable.row( $row.get(0) ).data();
				this.datatable.row( $row.get(0) ).data( data );

				$actions = $row.find('td.actions');
				if ( $actions.get(0) ) {
					this.rowSetActionsDefault( $row );
				}


				this.datatable.draw();
			}
			$('td').find('a.to-be-edit').each(function(){

				$(this).addClass('edit-row');
				$(this).removeClass('to-be-edit');
			});
		},

		rowEdit: function( $row ) {

			$($row).find('td').each(function(){				 
				targetuser.push($(this).text());
			});
			console.log(targetuser);
			if(status != 'add')
				status = 'edit';

			console.log	(status);
			var count = 0;
			var _self = this,
			data;

			data = this.datatable.row( $row.get(0) ).data();

			$('td').find('a.edit-row').each(function(){

				$(this).removeClass('edit-row');
				$(this).addClass('to-be-edit');
			});

			$row.children( 'td' ).each(function( i ) {
				var $this = $( this );

				if ( $this.hasClass('actions') ) {
					_self.rowSetActionsEditing( $row );
				} else {
					// Checker and Type
					
					if(count<=4)
						$this.html( '<input type="text" class="form-control input-block" value="' + $this.text() + '"/>' );
					else{
						if(count<=7){
							var builder = "";
							builder += '<select class="form-control input-block select2">';													
							for (var i = 0; i < userGroupList.length; i++) {
								builder += '<option value="' + userGroupList[i] + '">' + userGroupList[i] + '</option>';
							}
							builder += '<option value="none">none</option>';
							builder += '</select>';
							$this.html(builder);
							$('select').select2();
						}
						else{
							var builder = "";
							builder += '<select class="form-control input-block select2">';
							builder += '<option value="Active">Active</option>';											
							builder += '<option value="Inactive">Inactive</option>';		
							builder += '</select>';
							$this.html(builder);
							$('select').select2();
						}	

							
					}
					count++;
				}
			});
		},
		
		rowSave: function( $row ) {
			console.log(status);
			
			var count2 = 0;
			var _self     = this,
			$actions,
			values    = [];

			if ( $row.hasClass( 'adding' ) ) {
				this.$addButton.removeAttr( 'disabled' );
				$row.removeClass( 'adding' );
			}
			
			values = $row.find('td').map(function() {	
				var $this = $(this);
				var user = [];

				if ( $this.hasClass('actions') ) {
					_self.rowSetActionsDefault( $row );

					return _self.datatable.cell( this ).data();
				} else {
					// $this.find('input').val() = Value. AJAX HERE
					
					if(count2<=4){
						count2++;

						return $.trim( $this.find('input').val() );

						
					}else{
						count2++;

						return $.trim( $this.find('select').val() );

					}
					
				}
			});

			$('td').find('a.to-be-edit').each(function(){

				$(this).addClass('edit-row');
				$(this).removeClass('to-be-edit');
			});

			this.datatable.row( $row.get(0) ).data( values );

			$actions = $row.find('td.actions');
			if ( $actions.get(0) ) {
				this.rowSetActionsDefault( $row );
			}

			var user = [];
			var result = 0;
			$($row).find('td').each(function(){
				console.log($(this).text());
				user.push($(this).text());
			});
			

			this.datatable.draw();
			var sub =this.datatable;
			if(status == "add")
				targetuser = [];

			console.log(user);
			console.log('Username');
			console.log(targetuser[2]);
			$.ajax({
				type:'POST',
				url:'/index.php/adminoperations/adduser',
				data:{"user": user, 'status':status,
				'targetuser':targetuser[2] },
				success:function(data){

					result = data;

				}
			}).done(function(){

				if(parseInt(result) == 0 && status == "add"  ){

					sub.row( $row.get(0) ).remove().draw();
				}
				else if (parseInt(result) == 0 && status == "edit"){
					var ctr = 0;
					
					$($row).find('td').each(function(){
						if(ctr <= 8){
							$(this).val(targetuser[ctr]);
							$(this).text(targetuser[ctr]);
							$(this).html(targetuser[ctr]);
							
						}
						ctr++;
					});
				}

				targetuser = [];
				status = "none";

			});

			
			
		},

		rowRemove: function( $row ) {
			if ( $row.hasClass('adding') ) {

				this.$addButton.removeAttr( 'disabled' );
			}

			this.datatable.row( $row.get(0) ).remove().draw();
		},

		rowSetActionsEditing: function( $row ) {
			$row.find( '.on-editing' ).removeClass( 'hidden' );
			$row.find( '.on-default' ).addClass( 'hidden' );
		},

		rowSetActionsDefault: function( $row ) {
			$row.find( '.on-editing' ).addClass( 'hidden' );
			$row.find( '.on-default' ).removeClass( 'hidden' );
		}

	};

	$(function() {

		EditableTable.initialize();

	});

}).apply( this, [ jQuery ]);
