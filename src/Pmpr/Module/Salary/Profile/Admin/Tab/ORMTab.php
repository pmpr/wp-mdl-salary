<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b6ff0bed             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if (!$this->waeasakssissiuqg()) { goto koukiyqaccegmquc; } $this->waeasakssissiuqg()->prepare_items(); koukiyqaccegmquc: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto ekakkiuuquqkccse; } $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\x6c\x69\x73\164\x5f\164\x61\142\154\x65" => $qsyooiqcmkcieyuk, self::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), self::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(self::mmieaueggwwaokig), self::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\163\145\141\x72\x63\150\x5f\151\164\x65\155\163"), self::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), self::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; ekakkiuuquqkccse: return $qookweymeqawmcwo; } }
