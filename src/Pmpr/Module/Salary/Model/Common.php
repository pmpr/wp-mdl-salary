<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a52643ac             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; abstract class Common extends Model { public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq('mark', ['class' => "pr-status status-{$iueymcwwscwqkiyq}"], $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = Constants::aioqyewkwawaqgqe) : int { $smowyuyseuwiaiei = 0; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); } } return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy, $syweiogqscmeigge = Constants::aioqyewkwawaqgqe) { $oammesyieqmwuwyi = $this->iekyeyicoyyawomk()->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $smowyuyseuwiaiei = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($smowyuyseuwiaiei); } return $smowyuyseuwiaiei; } }
