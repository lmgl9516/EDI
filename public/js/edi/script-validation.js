function mfValidate(pTypeId, pVarName, pObject, pGender)
{
	if (!mfIsNotEmptyNorNullNorUndefined(pGender))
		pGender = 'o';

	if (mfIsNotEmptyNorNullNorUndefined(pObject.val())) //check if empty, null or undefined.
	{
		switch (pTypeId) //check specific format
		{
			case 0:
				if (mfIsNotValidEmail(pObject.val()))
				{
					pObject.addClass('failure');
					return 'Correo electrónico inválido';
				}
			break;

			default:
				pObject.removeClass('failure'); //successful validation
			return '';
		}
	}
	else
	{
		pObject.addClass('failure');
		return pVarName + ' no ha sido definid' + pGender;
	}
}

function mfIsNotValidEmail(pEmail)
{
    return !(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(pEmail);
}

function mfGetErrorString(pErrorsArray)
{
	var lLength = pErrorsArray.length;
	var lResult	= '';

	for (i = 0; i < lLength; i++)
	{
		if (pErrorsArray[i] != '' && typeof pErrorsArray[i] != 'undefined')
		{
			lResult = lResult + pErrorsArray[i];

			if (i != (lLength - 1))
				lResult = lResult + "\n\n";
		}
	}

	return lResult;
}

function mfHandleButtonLocks(pErrorString, pButtonHandled)
{
	if (pErrorString != '')
	{
		swal
		({
			title: 'Validación no exitosa',
			text: pErrorString,   
			confirmButtonColor: "#d0affb",
			type: 'error',
			confirmButtonText: 'Continuar'
		});
		return false;
	}

	return true;
}

function mfIsNotEmptyNorNullNorUndefined(pValue)
{
	return !(!pValue || 0 === pValue.length);
}
