function validation(targetID, inputValue, checkType, checkPattern = '', patternMessage = '') {
  let targetErrorMessage = document.getElementsByClassName(targetID + '-error').item(0);
  let errorMessage = '';

  for (let type of checkType.split('|')) {
    switch (type) {
      case 'required':
        if ((inputValue === '') && (errorMessage === '')) {
          errorMessage = '必須入力です';
        }else if((inputValue === '') && (errorMessage != '')) {
          errorMessage += ' 必須入力です'
        }break;

      case 'pattern':
        let reg = new RegExp(checkPattern)
        if ((! reg.test(inputValue)) && (errorMessage === '')) {
          errorMessage = patternMessage;
        }else if((! reg.test(inputValue)) && (errorMessage != '')) {
          errorMessage += ' ' + patternMessage;
        }break;
    }
  }

  if (errorMessage != '') {
    targetErrorMessage.style.display = 'inline-block';
    targetErrorMessage.innerHTML = errorMessage;
    return false;
  } else {
    targetErrorMessage.style.display = 'none';
    targetErrorMessage.innerHTML = '';
    return true;
  }
}

function blurInputCheck(event) {
  let targetID = event.currentTarget.id;
  let inputValue = event.currentTarget.value;
  validation(targetID, inputValue, this.checkType, this.checkPattern, this.patternMessage);
}

function checkAndSubmit() {
  let errorCount = 0;
  if(! validation('firstname', document.getElementById('firstname').value, 'required')) errorCount++;
  if(! validation('surname', document.getElementById('surname').value, 'required')) errorCount++;
  if(! validation('email', document.getElementById('email').value, 'required|pattern', '^.+@.+\\..+', 'メールアドレスの形式で入力してください')) errorCount++;
  if(! validation('postcode', document.getElementById('postcode').value, 'required|pattern', '[0-9]{3}-[0-9]{4}', '郵便番号の形式で入力してください')) errorCount++;
  if(! validation('address', document.getElementById('address').value, 'required')) errorCount++;
  if(! validation('opinion', document.getElementById('opinion').value, 'required')) errorCount++;
  
  if (errorCount === 0) document.contactform.submit();
}

document.getElementById('firstname').addEventListener('input', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('firstname').addEventListener('blur', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('surname').addEventListener('input', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('surname').addEventListener('blur', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('email').addEventListener('input', {checkType: 'required|pattern',checkPattern: '^.+@.+\\..+', patternMessage: 'メールアドレスの形式で入力してください', handleEvent: blurInputCheck});
document.getElementById('email').addEventListener('blur', {checkType: 'required|pattern',checkPattern: '^.+@.+\\..+', patternMessage: 'メールアドレスの形式で入力してください', handleEvent: blurInputCheck});
document.getElementById('postcode').addEventListener('input', {checkType: 'required|pattern',checkPattern: '[0-9]{3}-[0-9]{4}', patternMessage: '郵便番号の形式で入力してください', handleEvent: blurInputCheck});
document.getElementById('postcode').addEventListener('blur', {checkType: 'required|pattern',checkPattern: '[0-9]{3}-[0-9]{4}', patternMessage: '郵便番号の形式で入力してください', handleEvent: blurInputCheck});
document.getElementById('address').addEventListener('input', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('address').addEventListener('blur', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('opinion').addEventListener('input', {checkType: 'required', handleEvent: blurInputCheck});
document.getElementById('opinion').addEventListener('blur', {checkType: 'required', handleEvent: blurInputCheck});


