<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe0f26121f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Panel\Controller; use Pmpr\Package\Panel\REST\AbstractREST; use Pmpr\Package\Salary\Model\Agreement as Model; use WP_REST_Request; abstract class Controller extends AbstractREST { public function __construct() { goto agemwookwseyycqo; koiscokkkaimiecq: $this->namespace .= "\57\163\141\154\141\162\x79"; goto owuuuiekkaeoeacq; agemwookwseyycqo: $this->abstract = true; goto cquecqekuucwoumw; cquecqekuucwoumw: parent::__construct(); goto koiscokkkaimiecq; owuuuiekkaeoeacq: } protected function ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, $ekiuyucoiagmscgy, $ywmkwiwkosakssii = []) : array { goto uscokkmquayiukag; syusgosewwkoagoq: if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto sqwuqegeiisoiiuq; } goto mcqucouuiuoagqwc; kyiwsiakwgiwouyi: foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { goto gkqiqaqecmoogmaa; gsymkkskwsgggoic: if (!$igqsaukqcqscimok) { goto kwyimqumkuuyaiku; } goto ugykmcouiwiscoqu; wiwoiyoakywqyaiy: qwemkcoaseywkuuc: goto igmmqwyawcuuckkq; ceiuqsiqgiuiekem: mqimkwickkgqqeoi: goto gsymkkskwsgggoic; ugykmcouiwiscoqu: $sogksuscggsicmac[$momcykaoccoymeig] = $igqsaukqcqscimok; goto isewysikysqewkis; mceucsaeouuwyumm: $igqsaukqcqscimok = call_user_func_array($ekiuyucoiagmscgy, [$aqmwamyiwgeeymqa, $igqsaukqcqscimok, $ywmkwiwkosakssii]); goto ceiuqsiqgiuiekem; gkqiqaqecmoogmaa: if (!is_callable($ekiuyucoiagmscgy)) { goto mqimkwickkgqqeoi; } goto mceucsaeouuwyumm; isewysikysqewkis: kwyimqumkuuyaiku: goto wiwoiyoakywqyaiy; igmmqwyawcuuckkq: } goto awgmegueeqeyqamu; icumkkykaoqycqqu: $ggkaciewmeqmgckg = max(0, $qmeuaeiseuacgiqc - $weyoqgcesqgeusiu); goto oeamoqweiueaueay; egesuwkqkmaigaoe: $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE, 10); goto syusgosewwkoagoq; esagiiawomyacuiw: $ocqawgquwsqioses = $megmggkiokqkcwou > 0 ? intval($megmggkiokqkcwou / $weyoqgcesqgeusiu) : 1; goto maaisuqwkymeguys; ykqsuiyyosyeyscc: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE, 1); goto ugogoekeckgcmuaw; mcqucouuiuoagqwc: $megmggkiokqkcwou = count($oammesyieqmwuwyi); goto eweaaismksecwagy; eweaaismksecwagy: $qmeuaeiseuacgiqc = min($megmggkiokqkcwou, $weyoqgcesqgeusiu * ($suaemuyiacqyugsm - 1) + $weyoqgcesqgeusiu); goto icumkkykaoqycqqu; gqimwsyemoewagcy: eouwacqiommmeaqc: goto aoaqwygkaagiuuws; awgmegueeqeyqamu: saauykgakaeiyoua: goto gqimwsyemoewagcy; oeamoqweiueaueay: $oammesyieqmwuwyi = array_slice($oammesyieqmwuwyi, $ggkaciewmeqmgckg, $qmeuaeiseuacgiqc); goto owgsameoayaogsma; aoaqwygkaagiuuws: sqwuqegeiisoiiuq: goto esagiiawomyacuiw; uscokkmquayiukag: $megmggkiokqkcwou = 0; goto ykqsuiyyosyeyscc; ugogoekeckgcmuaw: $sogksuscggsicmac = []; goto egesuwkqkmaigaoe; owgsameoayaogsma: if (!$oammesyieqmwuwyi) { goto eouwacqiommmeaqc; } goto kyiwsiakwgiwouyi; maaisuqwkymeguys: return Model::symcgieuakksimmu()->oosqweumiyeayasy($sogksuscggsicmac, $megmggkiokqkcwou, max(1, $ocqawgquwsqioses), $weyoqgcesqgeusiu); goto qkyciyiwkmgkmquk; qkyciyiwkmgkmquk: } }