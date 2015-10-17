		var handler = StripeCheckout.configure({
			key: 'pk_test_55qsM1PZ5USDOOUeDhdv1GVF',
			image: '/assets/images/logo.png',
			token: function(token) {
				$("#stripeToken").val(token.id);
				$("#stripeEmail").val(token.email);
				$("#PaymentForm").submit();
			}
		});

		$('#customerPayButton').on('click', function(e) {
			var amount = $("#price").val()*100;
			// Open Checkout with further options
			
			handler.open({
				name: '乐购云汇 支付平台',
				description: '您正在乐汇支付购买某产品',
				amount: amount,
				bitcoin: true,
				alipay: true
			});
			e.preventDefault();
		});

		// Close Checkout on page navigation
		$(window).on('popstate', function() {
			handler.close();
		});