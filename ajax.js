 $('.btnForm').on('click', function(e) {
        e.preventDefault();
        
        
        const offer = $('.offer__slide').hasClass('actived')
        
        const payFlat = $('#payFlat').attr('value');
        const saleFlat = $('#saleFlat').attr('value');
        const termFlat = $('#termFlat').val();
        const phoneForm = $('.phoneForm').val();
        
        const compleksCheck = $('#compleksCheck').attr('value');
        const programCheck = $('#programCheck').attr('value');
        const bankCheck = $('#bankCheck').attr('value');
        const minPay = $('#minPay').attr('value');
        const procentBank = $('#procentBank').attr('value');
        const fullPay = $('#fullPay').attr('value');
        
        const mailTo = $('#mailTo').attr('value');
        const mailFrom = $('#mailFrom').attr('value');
        
        const textSuccess = `
            Ваша заявка успешно отправлена!
            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.8906 17.4688L19.0364 26.875L14.1094 22.1719" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.5 37.625C30.4056 37.625 37.625 30.4056 37.625 21.5C37.625 12.5944 30.4056 5.375 21.5 5.375C12.5944 5.375 5.375 12.5944 5.375 21.5C5.375 30.4056 12.5944 37.625 21.5 37.625Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
        
        const textError = `
            Введите телефонный номер для связи в формате +7 !
            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.8906 17.4688L19.0364 26.875L14.1094 22.1719" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.5 37.625C30.4056 37.625 37.625 30.4056 37.625 21.5C37.625 12.5944 30.4056 5.375 21.5 5.375C12.5944 5.375 5.375 12.5944 5.375 21.5C5.375 30.4056 12.5944 37.625 21.5 37.625Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
        
        const textErrorBank = `
            Выберите ипотечную программу !
            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.8906 17.4688L19.0364 26.875L14.1094 22.1719" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21.5 37.625C30.4056 37.625 37.625 30.4056 37.625 21.5C37.625 12.5944 30.4056 5.375 21.5 5.375C12.5944 5.375 5.375 12.5944 5.375 21.5C5.375 30.4056 12.5944 37.625 21.5 37.625Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
        
        $.ajax({
        	url: '/wp-content/themes/lsr/form/main-calculate.php',
        	method: 'POST',
        	dataType: 'html',
        	data: {
        	    payFlat: payFlat,
        	    saleFlat: saleFlat,
        	    termFlat: termFlat,
        	    compleksCheck: compleksCheck,
        	    programCheck: programCheck,
        	    bankCheck: bankCheck,
        	    minPay: minPay,
        	    procentBank: procentBank,
        	    fullPay: fullPay,
        	    mailFrom: mailFrom,
        	    mailTo: mailTo,
        	    phoneForm: phoneForm
        	},
        	success: function(data){
    	        $('.questions__ok-wrap').addClass('active');
    	        
        		if(offer) {
        	        $('.questions__ok').removeClass('error');
        	        
            	    if(phoneForm !== '' && phoneForm.length == 12) {
	    
            	        
            	        $('.questions__ok').removeClass('error');
            	        $('.questions__ok-wrap').addClass('active');
            	        
            	        $('.btnForm').addClass('disabled');
            	        $('.questions__ok').html(textSuccess);
            	    } else {
            	        $('.questions__ok').addClass('error');
            	        $('.questions__ok').html(textError);
            	    }
        	        
        	    } else {
        	         $('.questions__ok').addClass('error');
        	         $('.questions__ok').html(textErrorBank);
        	    }
        	}
        });
        
    
    });
