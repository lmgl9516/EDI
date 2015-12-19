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
					return 'Correo electrónico inválido';
			break;

			default:
			return '';
		}
	}
	else
	{
		pObject.addClass('failure');
		return pVarName + ' no ha sido definid' + pGender;
	}
}

function mfGetErrorString(pErrorsArray)
{
	var lLength      = pErrorsArray.length;
	var lErrorString = '';

	for (i = 0; i < lLength; i++)
	{
		if (pErrorsArray[i] != '' && typeof pErrorsArray[i] != 'undefined')
		{
			lErrorString = lErrorString + pErrorsArray[i];

			if (i != (lLength - 1))
				lErrorString = lErrorString + "\n\n";
		}
	}

	if (lErrorString != '')
	{
		swal
		({
			title: 'Validación no exitosa',
			text: lErrorString,   
			confirmButtonColor: "#B178BA",
			type: 'error',   
			confirmButtonText: 'Continuar'
		});
		return true;
	}

	return false;
}

function mfIsNotEmptyNorNullNorUndefined(pValue)
{
	return !(!pValue || 0 === pValue.length);
}

function mfIsNotValidEmail(pEmail)
{
    return !(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(pEmail);
}