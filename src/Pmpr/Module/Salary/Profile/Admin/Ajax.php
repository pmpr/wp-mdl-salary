<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660699ababe7d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Common; class Ajax extends Common { const kqewokmaycweqkco = "\x73\141\154\x61\162\x79\137\x61\144\144\x5f\156\145\x77\x5f\167\x69\164\150\x64\x72\141\167\137\141\x63\164\x69\157\x6e"; const kusssokwyuiygyqq = "\x73\x61\x6c\x61\162\x79\x5f\141\x64\144\x5f\x6e\x65\x77\x5f\x70\141\x79\155\145\x6e\164\x5f\141\x63\164\151\x6f\156"; const myikkigscysoykgy = ["\141\144\144\x5f\156\145\167\137\160\x61\x79\155\145\156\164" => self::kqewokmaycweqkco, "\x61\144\x64\137\x6e\x65\x77\x5f\x77\151\164\150\x64\162\141\167" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x6b\x67\x79\x6d\x75\x71\163\161\x6d\x71\165\x67\x71\x73\x6d\x77"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x75\x6f\x73\151\165\157\x71\171\163\x79\x6f\x6b\x73\145\161\145"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $icwicymcioeyeyek = $_POST; $uamcoiueqaamsqma = ''; $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto kmooekeyemqgucci; } $uamcoiueqaamsqma = __("\131\x6f\165\162\x20\x72\x65\161\165\x65\x73\x74\40\151\x73\x20\156\x6f\x74\x20\166\141\x6c\x69\x64\x2e", PR__MDL__SALARY); goto skuuyysooocugyww; kmooekeyemqgucci: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eiuuauwyukskgois = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Payment::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { goto mosuacsuaasssciu; } $uamcoiueqaamsqma = __("\x53\x6f\155\145\40\x72\x65\x71\x75\x69\162\x65\40\160\141\162\141\x6d\x65\x74\x65\162\x73\x20\x69\x73\x20\155\151\163\x73\151\156\x67\56", PR__MDL__SALARY); goto qksckewucmosemuo; mosuacsuaasssciu: $sogksuscggsicmac = Payment::symcgieuakksimmu()->gscuuyuyauokoyuo([]); $occymigcemkqucuw = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::ckcawaoawwioqecq); if ($occymigcemkqucuw) { goto qmokwkocmcyeyesc; } $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::iwyueouqaqegmcas, $occymigcemkqucuw); qmokwkocmcyeyesc: qksckewucmosemuo: skuuyysooocugyww: if (!$uamcoiueqaamsqma) { goto cmmusgkieoqyymgs; } $uamcoiueqaamsqma = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); cmmusgkieoqyymgs: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function uosiuoqysyokseqe() { $icwicymcioeyeyek = $_POST; $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto usyckeewsgwaysam; } $uamcoiueqaamsqma = __("\131\157\165\x72\40\x72\145\x71\165\x65\x73\164\x20\151\163\x20\156\157\164\x20\166\x61\154\151\144\56", PR__MDL__SALARY); goto gicuuwuuuwumyooa; usyckeewsgwaysam: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $miowmmgaiagcuyoo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::iockmgiyoygcswog); $wayieuwuoeasekks = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Admin::qagqayweyigciamg); $wssiaomiwukaiwmw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Admin::equssioqikiumyki); if ($wayieuwuoeasekks && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { goto mkgmaguyswskyioa; } $uamcoiueqaamsqma = __("\123\157\x6d\145\x20\x72\x65\161\165\151\162\145\x20\160\141\x72\141\155\145\164\x65\162\x73\40\x69\163\40\155\151\x73\163\151\x6e\147\x2e", PR__MDL__SALARY); goto skwusmoyomgqkimm; mkgmaguyswskyioa: $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $wayieuwuoeasekks); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::eoskkkieowogacws); $occymigcemkqucuw = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::ckcawaoawwioqecq); skwusmoyomgqkimm: gicuuwuuuwumyooa: if (!$uamcoiueqaamsqma) { goto kakkuyeccaacewyo; } $uamcoiueqaamsqma = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); kakkuyeccaacewyo: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } }
