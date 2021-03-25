<?
private function GetFillingPercent() {
        $requiredFieldsFullPercent = 60;
        $requiredFieldsFullCnt = 8;
        $requiredFieldsFilled = 0;
        if(!empty($this->arResult['FIELDS']['PREVIEW_PICTURE']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['BITRIX_USER']['LOGIN']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['PROPS']['SURNAME']['VALUE']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['PROPS']['NAME']['VALUE']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['PROPS']['BIRTH_DATE']['VALUE']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['PROPS']['LOCATION']['VALUE']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['PROPS']['POSITION']['VALUE']))
            $requiredFieldsFilled++;
        if(!empty($this->arResult['FUND']['FIELDS']['NAME']))
            $requiredFieldsFilled++;
        $requiredFieldsPercent = $requiredFieldsFullPercent / $requiredFieldsFullCnt * $requiredFieldsFilled;
        $additionFieldsFullPercent = 100 - $requiredFieldsFullPercent;
        // $additionFieldsFullCnt = 9;
        $additionFieldsFullCnt = 6;
        $additionFieldsFilled = 0;
        // if(!empty($this->arResult['PROPS']['SECOND_NAME']['VALUE']))
        //     $additionFieldsFilled++;
        // if(!empty($this->arResult['PROPS']['GENDER']['VALUE']))
        //     $additionFieldsFilled++;
        if(!empty($this->arResult['PROPS']['MOBILE_PHONE_NUMBER']['VALUE']))
            $additionFieldsFilled++;
        if(!empty($this->arResult['FUND']['FIELDS']['~DETAIL_TEXT']))
            $additionFieldsFilled++;
        if(!empty($this->arResult['FUND']['PROPS']['LEGAL_ADDRESS']['VALUE']))
            $additionFieldsFilled++;
        // if(!empty($this->arResult['FUND']['PROPS']['MAILING_ADDRESS']['VALUE']))
        //     $additionFieldsFilled++;
        if(!empty($this->arResult['FUND']['PROPS']['SITE_DOMAIN']['VALUE']))
            $additionFieldsFilled++;
        if(!empty($this->arResult['FUND']['FIELDS']['PREVIEW_PICTURE']))
            $additionFieldsFilled++;
        if(!empty($this->arResult['FUND']['PROPS']['DOCUMENTS']['VALUE']))
            $additionFieldsFilled++;
        $additionFieldsPercent = $additionFieldsFullPercent / $additionFieldsFullCnt * $additionFieldsFilled;
        return round($requiredFieldsPercent + $additionFieldsPercent, 1);
    }
    ?>
