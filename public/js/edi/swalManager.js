function mpSwalConfirmError(pTitle, pText, pConfirmText)
{
	swal
	({
		title: pTitle,
		text: pText,   
		confirmButtonColor: "#B178BA",
		type: 'error',   
		confirmButtonText: pConfirmText
	});
}

function mpSwalSuccess(pTitle, pText)
{
	swal
	({
		title: pTitle,
		text: pText,   
		type: 'success'
	});
}

function mpSwalError(pTitle, pText)
{
	swal
	({
		title: pTitle,
		text: pText,   
		type: 'error'
	});
}