 

(function( $ ) {

	'use strict';

	var EditableTable = {

		options: {
			 
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
			this.datatable = this.$table.DataTable();

			window.dt = this.datatable;

			return this;
		},

		

	};

	$(function() {

		EditableTable.initialize();

	});

}).apply( this, [ jQuery ]);