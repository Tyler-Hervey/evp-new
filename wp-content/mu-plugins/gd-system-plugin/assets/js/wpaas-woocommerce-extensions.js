( function( $ ) {

	/**
	 * WooCommerce handlers
	 *
	 * @type {Object}
	 */
	var wpaasWoocommerce = {

		showDialog: function( e ) {

			e.preventDefault();

			$( '#mwp_woocommerce_extensions_dialog' ).dialog( {
				dialogClass: 'mwp-dialog',
				draggable: false,
				resizable: false,
				modal: true,
				width: '700px',
				height: 'auto',
				title: wpaasWooCommerceExtensions.dialogTitle,
				open: function( event, ui ) {
					wpaasWoocommerce.getExtensions();
				},
				close: function () {
					$( this ).dialog( 'destroy' );
					if ( window.history.replaceState ) {
						window.history.replaceState( null, document.title, location.href.split( '?' )[0] );
					}
				}
			} );

		},

		toggleSubmitButtonState: function() {

			$( '.js-install-wc-extensions' ).attr( 'disabled', ! $( '.js-extension-checkbox:checked' ).length );

		},

		getExtensions: function() {

			$.post(
				ajaxurl,
				{
					'action': 'render_woocommerce_extensions',
				},
				function( response ) {

					var $extensionsContainer = $( '.ui-dialog-content .extensions' );

					$extensionsContainer.find( '.preloader' ).remove();

					if ( ! response.success ) {

						$extensionsContainer.html( '' );

						return;

					}

					$extensionsContainer.next().find( '.js-install-wc-extensions' ).removeAttr( 'disabled' );
					$extensionsContainer.html( response.data );

				}
			);

		},

		installExtensions: function( e ) {

			e.preventDefault();

			$( this ).attr( 'disabled', 'disabled' );

			var installExtensions = [],
			    buttonNonce       = $( this ).data( 'nonce' );

			$( '#mwp_woocommerce_extensions_dialog .js-extension-checkbox:checked' ).each( function() {

				$( this ).hide().closest( 'li.plugin' ).addClass( 'installing' );
				$( wpaasWooCommerceExtensions.preloader ).insertAfter( $( this ) );

				installExtensions.push( $( this ).data( 'plugin-slug' ) );

			} );

			if ( ! installExtensions.length ) {

				return;

			}

			installExtensions.forEach( function( pluginSlug ) {

				$.post(
					ajaxurl,
					{
						'action': 'install_woocommerce_extensions',
						'slug': pluginSlug,
						'_ajax_nonce': buttonNonce,
					},
					function( response ) {

						var $pluginCheckbox = $( '.js-extension-checkbox[data-plugin-slug="' + response.data.slug + '"]' ),
						    $icon           = response.success ? '<span class="dashicons dashicons-yes install-success"></span>' : '<span class="dashicons dashicons-no-alt install-error"></span>';

						if ( ! response.success ) {

							$pluginCheckbox
								.closest( 'li.plugin' )
								.find( 'div.content' )
								.append( '<p class="error">' + response.data.errorMessage + '</p>' );

						}

						$pluginCheckbox
							.closest( 'li.plugin' )
							.removeClass( 'installing' )
							.find( 'img.loader' )
							.remove();

						$pluginCheckbox
							.show()
							.replaceWith( $icon );

					}
				);

			} );

			$( '#mwp_woocommerce_extensions_dialog .js-install-wc-extensions' ).removeAttr( 'disabled' );

		},

	};

	$( document ).on( 'click', '#mwp-view-woocommerce-extensions', wpaasWoocommerce.showDialog );
	$( document ).on( 'click', '#mwp_woocommerce_extensions_dialog .js-extension-checkbox', wpaasWoocommerce.toggleSubmitButtonState );
	$( document ).on( 'click', '#mwp_woocommerce_extensions_dialog .js-install-wc-extensions', wpaasWoocommerce.installExtensions );
	$( document ).on( 'click', '#mwp_woocommerce_extensions_dialog .js-cancel-wc-extensions', function() {
		$( '#mwp_woocommerce_extensions_dialog' ).dialog( 'destroy' );
		if ( window.history.replaceState ) {
			window.history.replaceState( null, document.title, location.href.split( '?' )[0] );
		}
	} );

	if ( -1 !== window.location.search.toLowerCase().indexOf( 'woocommerce_extensions=1' ) ) {

		wpaasWoocommerce.showDialog( new Event( 'click', {} ) );

	}

} )( jQuery );
