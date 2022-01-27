const stripe = Stripe('pk_test_51KJryPA5jYJ0Nrw3yhgCFKF7twPNOL7sYztBSlrD6kGuYoVemDOyzZVYjPjK0nnLsx0fd7Gn5jbx4lHhNMSWpLf9002VOGbQbJ');
const elements = stripe.elements();

/* Stripe Elementsを使ったFormの各パーツをどんなデザインにしたいかを定義 */
const style = {
    base: {
        fontSize: '12px',
        color: "#32325d",
        border: "solid 1px ccc"
    }
};

const classes = {
    base: "form-control"
};


const cardNumber = elements.create('cardNumber', {style:style,classes:classes});
cardNumber.mount('#cardNumber');
const cardCvc = elements.create('cardCvc', {style:style,classes:classes});
cardCvc.mount('#securityCode');
const cardExpiry = elements.create('cardExpiry', {style:style,classes:classes});
cardExpiry.mount('#expiration');


document.querySelector('#form_payment').addEventListener('submit', function(e) {
console.log(1);

    e.preventDefault();


    stripe.createToken(cardNumber,{name: document.querySelector('#cardName').value}).then(function(result) {



        if (result.error) {
            alert("カード登録処理時にエラーが発生しました。カード番号が正しいものかどうかをご確認いただくか、別のクレジットカードで登録してみてください。");
        } else {

    // console.log(result.token);
            stripeTokenHandler(result);
        }
    });



    function stripeTokenHandler(token) {
        const form = document.getElementById('form_payment');
        const hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token);
        form.appendChild(hiddenInput);

        form.submit();
    }

},false);