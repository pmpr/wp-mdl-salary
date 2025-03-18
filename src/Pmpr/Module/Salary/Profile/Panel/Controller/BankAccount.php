<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bc44a7f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; use WP_User; class BankAccount extends Controller { public function __construct() { $this->rest_base = 'bank-account'; parent::__construct(); } public function register_routes() { $this->register('/get-list', [Constants::wwgusigoaksqmwsm => [$this, 'ciugwooasaqcywas']]); $this->register('/get-fields', [Constants::wwgusigoaksqmwsm => [$this, 'ugmceccgwaaaigiy']]); $this->register('/save', [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, 'save']]); $this->register('/delete', [Constants::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, Constants::wwgusigoaksqmwsm => [$this, 'delete']]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $yygmoeguaqyumuui = [Constants::squoamkioomemiyi, BankAccountModel::oogeqgcgkamuoaoe, BankAccountModel::dsuiycscsceeqmga, Constants::ciyoccqkiamemcmm]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $gkioossaaiumqqsq = $kekwscouisqosqio->iekyeyicoyyawomk(); $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $ywmkwiwkosakssii[Constants::wosqwewmqmyweqea] = false; $keccaugmemegoimu = $gkioossaaiumqqsq->aeggeuqycwawueqy($gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu))]), $ywmkwiwkosakssii); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $eaoumsseceiowgsk = (array) $igqsaukqcqscimok; $scsyuucsumiwkqqc = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $igqsaukqcqscimok = $kekwscouisqosqio->scqakcemaqsqkema($igqsaukqcqscimok); $qwkooaaqwoeeuccc = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqeykgyoooqysmca = $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $eaoumsseceiowgsk[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $eaoumsseceiowgsk[$sqeykgyoooqysmca] = $eaoumsseceiowgsk[Constants::ciyoccqkiamemcmm]; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { $meqocwsecsywiiqs = $eqgoocgaqwqcimie = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::squoamkioomemiyi: $meqocwsecsywiiqs = __('Type', PR__MDL__SALARY); $eqgoocgaqwqcimie = $kekwscouisqosqio->yomgsemomcmgekyi(Constants::squoamkioomemiyi, $igqsaukqcqscimok); $sqqewmoeaekuyyas = 2; break; case BankAccountModel::oogeqgcgkamuoaoe: $meqocwsecsywiiqs = __('Bank', PR__MDL__SALARY); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[$uusmaiomayssaecw] ?? ''; $sqqewmoeaekuyyas = 1; break; case BankAccountModel::dsuiycscsceeqmga: $meqocwsecsywiiqs = sprintf(__('Owner of %s', PR__MDL__SALARY), $qwkooaaqwoeeuccc); $eqgoocgaqwqcimie = $scsyuucsumiwkqqc[BankAccountModel::dsuiycscsceeqmga]; break; case Constants::ciyoccqkiamemcmm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($scsyuucsumiwkqqc[Constants::ciyoccqkiamemcmm]); $meqocwsecsywiiqs = sprintf(__('Number of %s', PR__MDL__SALARY), $qwkooaaqwoeeuccc); $sqqewmoeaekuyyas = 99; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; } $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->set($igqsaukqcqscimok, [Constants::ygeqsmugcaeeeuwu => $eaoumsseceiowgsk, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc)) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $kooascmqqwmaskmi = $kekwscouisqosqio->iekyeyicoyyawomk()->akkkoiiymmamsauc($aokagokqyuysuksm); if ($kooascmqqwmaskmi) { if (Constants::wagwccqcqwgsoyoi !== $kekwscouisqosqio->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $kooascmqqwmaskmi)) { $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__('Bank account removed successfully', PR__MDL__SALARY)); } else { if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Something wrong on remove process, please try again', PR__MDL__SALARY)); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Your requested account for remove is locked', PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Can not find requested account', PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc, 0)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $aokagokqyuysuksm = 0) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::squoamkioomemiyi); $ecoqwakkesyewqwg = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, BankAccountModel::dsuiycscsceeqmga); if ($ecoqwakkesyewqwg && $sqeykgyoooqysmca) { $kekwscouisqosqio = BankAccountModel::symcgieuakksimmu(); $icwicymcioeyeyek = [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ciyoccqkiamemcmm => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca), Constants::yauicucwkgqyygas => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), BankAccountModel::dsuiycscsceeqmga => $ecoqwakkesyewqwg]; if ($aokagokqyuysuksm) { $icwicymcioeyeyek[$kekwscouisqosqio->kumuygiiqswoyasy()] = $aokagokqyuysuksm; } $sogksuscggsicmac = $kekwscouisqosqio->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $sogksuscggsicmac; } else { $keccaugmemegoimu = $this->qasywwyamoesisyi(__('Bank account saved successfully', PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__('Missing some require fields', PR__MDL__SALARY), 400); } } return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::dsuiycscsceeqmga)->gswweykyogmsyawy(__('Account Owner Name', PR__MDL__SALARY))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Account Type', PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::wyqmcowecikgawuu, __('IBAN', PR__MDL__SALARY))->kesomeowemmyygey(BankAccountModel::skyceaacaaaamiii, __('Debit Card', PR__MDL__SALARY))->qyucewwiggkyeaso(BankAccountModel::wyqmcowecikgawuu, BankAccountModel::wyqmcowecikgawuu)->qyucewwiggkyeaso(BankAccountModel::skyceaacaaaamiii, BankAccountModel::skyceaacaaaamiii)->eumecwmqmukqgyea()->mkmssscwmeekwgqo(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::wyqmcowecikgawuu)->gswweykyogmsyawy(__('IBAN', PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(BankAccountModel::skyceaacaaaamiii)->gswweykyogmsyawy(__('Debit Card', PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
