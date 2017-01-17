 

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
			scrollY:        "390px",
            scrollX:        "1300px",
           
    		 "sScrollX": "100%",
            scrollCollapse: true,
            paging:         true,

            columnDefs: [
                { width: '100px', targets: 0 },
                { width: '100px', targets: 1 },
                { width: '100px', targets: 2 },
                { width: '100px', targets: 3 },
                { width: '100px', targets: 4 },
                { width: '100px', targets: 5 },
                { width: '100px', targets: 6 },
                { width: '100px', targets: 7 },
                { width: '100px', targets: 8 },
                { width: '100px', targets: 9 },
                { width: '100px', targets: 10 },
                { width: '100px', targets: 11 },
                { width: '100px', targets: 12 },
                { width: '100px', targets: 13 },
                { width: '100px', targets: 14 },
                { width: '100px', targets: 15 },
                { width: '100px', targets: 16 },
                { width: '100px', targets: 17 },
                { width: '100px', targets: 18 },
                { width: '100px', targets: 19 },
                { width: '100px', targets: 20 },
                { width: '100px', targets: 21 },
                { width: '100px', targets: 22 },
                { width: '100px', targets: 23 },
                { width: '100px', targets: 24 },
                { width: '100px', targets: 25 },
                { width: '100px', targets: 26 },
                { width: '100px', targets: 27 },
                { width: '100px', targets: 28 }
                
            ],
 			/*fixedColumns: true,*/
            fixedColumns:  {
	            leftColumns: 1,
	            rightColumns:1,
	        },
            ordering: true

            
			});

			window.dt = this.datatable;

			return this;
		},

		

	};

	$(function() {

		EditableTable.initialize();

	});

}).apply( this, [ jQuery ]);