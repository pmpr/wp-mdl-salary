<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fe26895947             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const FEE_POLICIES = "\163\141\x6c\141\162\x79\x5f\146\x65\x65\137\x70\x6f\154\151\x63\x69\x65\x73"; const POLICY_VALUE = "\x70\157\154\x69\143\x79\x5f\166\x61\x6c\165\x65"; const ACCOUNT_TYPE = "\141\x63\143\157\x75\x6e\164\137\164\171\160\145"; const POLICY_TYPE = "\160\x6f\154\x69\143\x79\137\164\171\x70\x65"; const BANK_NAME = "\x62\x61\x6e\153\x5f\x6e\141\155\145"; const VARIABLE_POLICY = "\x76\141\x72\151\141\x62\x6c\145\x5f\160\x6f\x6c\x69\x63\171"; const CONSTANT_POLICY = "\x63\x6f\156\x73\x74\x61\x6e\164\137\160\157\x6c\151\x63\171"; public function __construct() { goto acaqummmoyiemqss; eeqesooyqagwawae: $this->parentMenu = $wksoawcgagcgoask; goto oqugqwcyomiaaoqu; oqugqwcyomiaaoqu: $this->hasLicense = false; goto foeeqckqsyockkak; suswcqoyyqkkquuo: $this->name = $wksoawcgagcgoask; goto eeqesooyqagwawae; acaqummmoyiemqss: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto suswcqoyyqkkquuo; foeeqckqsyockkak: parent::__construct(); goto iekumemscwieugqw; iekumemscwieugqw: } public function gogaagekwoisaqgu() { $this->title = __("\x53\145\164\164\x69\156\x67", PR__PKG__SALARY); } public function ecwgiiuacoaokqkw() { $uqyaagwcuoewkkss = Validator::symcgieuakksimmu(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\107\145\156\x65\162\141\154", PR__PKG__SALARY))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$this->mwikyscisascoeea()}\137\144\x65\x64\165\x63\x74\x73", __("\x44\x65\144\165\x63\164\163", PR__PKG__SALARY))->mkksewyosgeumwsa(self::iseogkiymousogom(self::FEE_POLICIES, __("\106\145\x65\x20\120\157\154\151\143\151\x65\163", PR__PKG__SALARY))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE, __("\x45\156\141\142\154\145", PR__PKG__SALARY)))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::BANK_NAME)->oikgogcweiiaocka()->eumecwmqmukqgyea())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ACCOUNT_TYPE, __("\x41\x63\143\157\x75\x6e\x74\40\111\x6e\x66\x6f\162\x6d\x61\x74\x69\157\156\40\x54\171\160\x65", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->oikgogcweiiaocka()->eumecwmqmukqgyea())->mkksewyosgeumwsa(self::kqcemgcowgomaqwa(self::POLICY_TYPE, __("\120\157\x6c\151\143\x79\40\124\x79\160\x65", PR__PKG__SALARY), $this->ksiaywqocueukouw())->oeeumggeiyyckkom(self::VARIABLE_POLICY, self::VARIABLE_POLICY)->oeeumggeiyyckkom(self::CONSTANT_POLICY, self::CONSTANT_POLICY)->eyygsasuqmommkua(self::CONSTANT_POLICY)->eumecwmqmukqgyea())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CONSTANT_POLICY, $this->ksiaywqocueukouw(self::CONSTANT_POLICY))->mouwuossggyiwems())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::VARIABLE_POLICY, $this->ksiaywqocueukouw(self::VARIABLE_POLICY))->iaggyqeqiyqgmgoo())->awaeegwoiqoisoam([self::BANK_NAME, self::ACCOUNT_TYPE])->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::ICON_COIN))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR)); } public function ksiaywqocueukouw($qqqskcogoyswqaum = '') { $aacykmqwasyaykgu = [self::CONSTANT_POLICY => __("\x43\157\156\x73\x74\141\x6e\x74\40\122\141\x74\145", PR__PKG__SALARY), self::VARIABLE_POLICY => __("\126\x61\162\151\141\142\154\145\40\122\141\x74\145", PR__PKG__SALARY)]; return ManipulateArray::get($aacykmqwasyaykgu, $qqqskcogoyswqaum, $aacykmqwasyaykgu); } }
