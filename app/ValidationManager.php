<?php 
namespace App;

class ValidationManager 
{
	public function __construct()
	{
	}

	public static function mfValidate($pValidationId, $pVarName, $pValue, $pChar)
	{
		if (ValidationManager::mfIsNotEmptyNorNullNorUndefined($pValue)) //check if empty, null or undefined.
		{
			switch ($pValidationId) //check specific format
			{
				case 0:
					if (ValidationManager::mfIsNotValidEmail($pValue))
						return 'Correo electrónico inválido';
				break;

				default: return '';
			}
		}
		else
		{
			return $pVarName.' no ha sido definid'.$pChar;
		}
	}

	public static function mfGetErrorString($pErrorsArray)
	{
		$lLength      = count($pErrorsArray);
		$lErrorString = '';

		for ($i = 0; $i < $lLength; $i++)
		{
			if (ValidationManager::mfIsNotEmptyNorNullNorUndefined($pErrorsArray[$i]))
			{
				$lErrorString = $lErrorString.$pErrorsArray[$i];

				if ($i != ($lLength - 1))
					$lErrorString = $lErrorString."\n\n";
			}
		}

		return ($lErrorString == '') ? null : $lErrorString;
	}


	public static function mfIsNotEmptyNorNullNorUndefined($pValue)
	{
		return !(!$pValue || 0 == strlen($pValue));
	}

	public static function mfIsNotValidEmail($pEmail)
	{
        return !(preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $pEmail));
	}
}

?>