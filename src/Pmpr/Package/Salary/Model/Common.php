<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fcd114df5             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; abstract class Common extends Model { public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->okgmqaeuaeymaocm($wksoawcgagcgoask)->wiskakymeaywyeuw($wksoawcgagcgoask); } public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { return ManipulateHTML::uuccukgasskgimsq("\155\141\x72\153", ["\143\x6c\x61\x73\x73" => "\160\162\x2d\163\x74\x61\x74\x75\163\x20\163\x74\141\164\165\x73\55{$iueymcwwscwqkiyq}"], ManipulateHTML::gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = "\x61\155\157\x75\x6e\164") : int { $smowyuyseuwiaiei = 0; if (!$oammesyieqmwuwyi) { goto owmuceyswmgueasi; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) ManipulateArray::get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); qmuwoecuacmkwgem: } wakmayaoqoskekqy: owmuceyswmgueasi: return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = "\x76\151\x65\167", $syweiogqscmeigge = "\x61\x6d\157\x75\156\x74") { $oammesyieqmwuwyi = $this->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if (!($mgkceomocowocqyo === "\x76\151\145\x77")) { goto mwsmsguqqkcwiiuk; } $smowyuyseuwiaiei = ManipulateWoocommerce::mcgaskyiamgqmqgu($smowyuyseuwiaiei); mwsmsguqqkcwiiuk: return $smowyuyseuwiaiei; } public function ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = null, $mksyucucyswaukig = null) { return parent::ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), $aamkqmkgsaqmcuao, $mksyucucyswaukig); } }
