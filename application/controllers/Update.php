<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\105\120\x41\124\110") or exit("\116\157\40\144\151\x72\x65\x63\x74\x20\x73\x63\162\x69\x70\x74\40\x61\x63\x63\145\x73\x73\40\141\154\x6c\x6f\x77\x65\144"); class Update extends CI_Controller { function __construct() { goto I5Pjd; xkj45: include APPPATH . "\143\157\156\146\x69\147\x2f\x64\x61\164\141\142\141\163\145\56\160\x68\160"; goto zPwye; EqMJZ: $this->load->database(); goto DQyDX; I5Pjd: parent::__construct(); goto xkj45; zPwye: $this->load->dbforge(); goto EqMJZ; DQyDX: $this->load->library("\x65\x6e\143\162\x79\x70\164\151\157\156"); goto dBlif; dBlif: } public function output_json($data, $encode = true) { goto Y7BJs; lM4fj: ho_TN: goto kw2oV; Y7BJs: if (!$encode) { goto ho_TN; } goto BDaEn; BDaEn: $data = json_encode($data); goto lM4fj; kw2oV: $this->output->set_content_type("\141\x70\x70\x6c\151\x63\x61\164\151\x6f\x6e\x2f\x6a\163\157\156")->set_output($data); goto fIjUo; fIjUo: } public function index() { goto QlQsA; V4qUk: $this->load->view("\151\x6e\163\164\x61\154\154\57\x66\157\x6f\164\x65\162"); goto eYkR4; vCV98: $this->load->view("\151\156\163\x74\x61\x6c\x6c\57\150\145\141\x64\145\162", $data); goto htUQ1; u0fve: $json = json_decode($json); goto x0Qrq; x0Qrq: $json = (array) $json; goto v2nij; htUQ1: $this->load->view("\x69\156\x73\x74\141\x6c\x6c\57\x75\x70\x64\141\x74\145"); goto V4qUk; QlQsA: $json = file_get_contents("\x2e\57\x61\163\x73\145\164\x73\57\141\x70\x70\57\x64\x62\x2f\x64\141\x74\141\142\x61\163\x65\56\152\x73\157\156"); goto u0fve; v2nij: $data["\152\163\x6f\x6e"] = $json; goto vCV98; eYkR4: } function object_to_array($data) { goto WsB2V; PAqAb: $result = []; goto QPkSx; Glxi9: return $result; goto UpYKx; bRxvK: return $data; goto cqbTm; W8PKI: IKW9M: goto Glxi9; UpYKx: ViuRR: goto bRxvK; QPkSx: foreach ($data as $key => $value) { $result[$key] = is_array($data) || is_object($data) ? $this->object_to_array($value) : $value; iJA4U: } goto W8PKI; WsB2V: if (!(is_array($data) || is_object($data))) { goto ViuRR; } goto PAqAb; cqbTm: } public function checkDatabase() { goto rnbEc; J2GtP: $tbl_ada = array_keys($fields); goto CBblA; rC8O4: $create_tables = []; goto nNv9Z; Lxx4Q: $this->output_json($data); goto Q2pZw; C1e5G: foreach ($tabless as $table) { goto XGXuc; XAcmN: $query = $query->result_object(); goto crIyO; JdI_W: $retval[$i] = new stdClass(); goto n_zrc; xsSkP: phW2b: goto g0ZRy; c134P: if ($query[$i]->extra == "\141\165\164\157\x5f\151\156\x63\x72\x65\155\x65\x6e\164") { goto QBLwM; } goto ItAj6; Z2jA3: goto e5Eqd; goto xsSkP; XGXuc: $datafld = $this->db->field_data($table); goto cxWdH; eOIr_: if (!($query[$i]->extra != '')) { goto PmZ0M; } goto c134P; Sq0bG: if (!(($query = $this->db->query($sql)) === FALSE)) { goto L46qK; } goto CkDSI; HLYbR: KuAv1: goto Ac3D8; CkDSI: $currentDb = FALSE; goto D7z26; ItAj6: $datafld[$i]->extra = $query[$i]->extra; goto kQJ7N; rEyUW: pKLF0: goto JdI_W; ihngA: $fields[$table] = $datafld; goto HLYbR; crIyO: $retval = array(); goto wf4YM; hq2zk: QBLwM: goto oO_Z2; P8XY5: $i++; goto Z2jA3; q_PqA: Vp3h6: goto P8XY5; w8_Gd: if (!($datafld[$i]->name == $query[$i]->column_name)) { goto pKLF0; } goto eOIr_; wf4YM: $i = 0; goto pl_Zs; g0ZRy: $currentDb[$table] = $retval; goto ihngA; oO_Z2: $datafld[$i]->auto_increment = true; goto yoqNY; olJvQ: PmZ0M: goto rEyUW; aX4YC: e5Eqd: goto sNPCY; D7z26: L46qK: goto XAcmN; Q26e0: $retval[$i]->extra = $query[$i]->extra; goto q_PqA; yoqNY: bnl6p: goto olJvQ; cxWdH: $sql = "\123\x45\x4c\105\103\124\x20\140\143\x6f\154\x75\x6d\156\x5f\x6e\141\x6d\x65\140\54\x20\140\156\x75\x6d\145\x72\151\143\x5f\160\162\x65\143\151\163\151\x6f\156\x60\54\40\140\x65\170\x74\x72\141\140\x2c\40\x60\151\163\137\156\165\x6c\154\x61\x62\x6c\145\140" . "\x20\106\122\117\x4d\40\140\x69\x6e\x66\x6f\162\x6d\141\164\x69\157\x6e\137\163\x63\x68\145\155\141\x60\56\x60\143\157\x6c\165\x6d\x6e\163\x60\40\x57\110\x45\122\105\x20\x74\141\x62\x6c\145\x5f\163\x63\150\145\155\141\40\75\40\42" . $this->db->database . "\42\x20\101\116\x44\40\x74\x61\142\x6c\x65\x5f\x6e\x61\x6d\145\x20\x3d\x20\x22" . $table . "\42"; goto Sq0bG; n_zrc: $retval[$i]->name = $query[$i]->column_name; goto Q26e0; sNPCY: if (!($i < $c)) { goto phW2b; } goto w8_Gd; kQJ7N: goto bnl6p; goto hq2zk; pl_Zs: $c = count($query); goto aX4YC; Ac3D8: } goto bHz7q; VVkl1: $edit_columns = []; goto Yzf01; ftDMQ: $data = ["\x64\142" => $fields, "\x63\162\x65\141\x74\x65" => $create_tables, "\155\x6f\144\x69\x66\171" => $edit_columns, "\x61\x64\x64" => $add_columns, "\143\x6f\x75\156\x74\163" => $counts, "\x6a\x73\157\156" => $json, "\x63\165\x72\x72\145\x6e\164" => $currentDb]; goto Lxx4Q; zJcVY: $full_tables = array_unique($full_tables); goto SF5Rm; bHz7q: N02q2: goto glLUW; tz6ff: $tbl_baru = array_keys($json); goto J2GtP; DRW9S: $currentDb = []; goto C1e5G; DI111: $tabless = $this->db->list_tables(); goto P89Gt; Ojalh: $json = (array) $json; goto tz6ff; P89Gt: $fields = []; goto DRW9S; baHgn: $this->db->db_debug = FALSE; goto DI111; y7Eq_: $json = json_decode($json); goto Ojalh; Yzf01: foreach ($full_tables as $table) { goto iRVUU; x_Li4: if (!isset($json[$table])) { goto QA2qI; } goto A72n2; Lhdqj: YNXv6: goto q8312; RQyfd: $create_tables[$table] = $json[$table]; goto ECmD0; jlQNQ: xINFC: goto sgsP0; TRQ3y: fyTFO: goto Lhdqj; ECmD0: goto fyTFO; goto IzXJW; IzXJW: ldEeh: goto x_Li4; sgsP0: QA2qI: goto TRQ3y; iRVUU: if ($this->db->table_exists($table)) { goto ldEeh; } goto RQyfd; A72n2: foreach ($json[$table] as $jtbl) { goto SjkOn; XRsSn: foreach ($fields[$table] as $ftbl) { goto BmQdC; xOHaW: S8l1O: goto A346L; tkewv: $edit_columns[$table][] = $jtbl; goto LZ_UT; BmQdC: if (!($jtbl->name == $ftbl->name)) { goto S8l1O; } goto IdgIR; LZ_UT: iY4Dt: goto xOHaW; IdgIR: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto iY4Dt; } goto tkewv; A346L: uCzP3: goto fbP4C; fbP4C: } goto nV83_; SjkOn: if ($this->db->field_exists($jtbl->name, $table)) { goto f2afs; } goto xEjpn; bkcQ6: YbANy: goto Kdo0B; xEjpn: $add_columns[$table][] = $jtbl; goto iKd5f; nV83_: wh8xm: goto teQD4; iKd5f: goto bvLFV; goto q8DLG; teQD4: bvLFV: goto bkcQ6; q8DLG: f2afs: goto XRsSn; Kdo0B: } goto jlQNQ; q8312: } goto irU79; glLUW: $json = file_get_contents("\56\x2f\141\163\163\x65\164\163\x2f\x61\160\x70\57\144\x62\57\x64\141\x74\141\x62\141\x73\x65\56\x6a\x73\x6f\x6e"); goto y7Eq_; irU79: eAuKR: goto kkSJn; nNv9Z: $add_columns = []; goto VVkl1; CBblA: $full_tables = array_merge($tbl_baru, $tbl_ada); goto zJcVY; kkSJn: $counts = count($create_tables) + count($add_columns) + count($edit_columns); goto ftDMQ; rnbEc: $db_debug = $this->db->db_debug; goto baHgn; SF5Rm: sort($full_tables); goto rC8O4; Q2pZw: } public function updateDatabase() { goto v2UC2; mr1Ar: $tbl_ada = array_keys($fields); goto QgoNz; dBq0n: echo true; goto mEPb7; iXauE: $full_tables = array_unique($full_tables); goto yNzix; oPcO_: $fields = []; goto EjIin; v2UC2: $tabless = $this->db->list_tables(); goto oPcO_; QgoNz: $full_tables = array_merge($tbl_baru, $tbl_ada); goto iXauE; EjIin: foreach ($tabless as $table) { $fields[$table] = $this->db->field_data($table); Ln898: } goto syNls; syNls: K_wEt: goto UtRkd; yNzix: sort($full_tables); goto A11xd; eh9Eb: $json = json_decode($json); goto DlgZI; DlgZI: $json = (array) $json; goto rwTYk; A11xd: foreach ($full_tables as $table) { goto Dkz5W; Ilte_: if (!isset($json[$table])) { goto kI2iR; } goto i2Vdb; HA_Jc: Fjzfz: goto xGdkM; zOYFl: if (!isset($json[$table])) { goto UCvvJ; } goto ozedC; i2Vdb: foreach ($json[$table] as $tbl => $jtbl) { goto dr9D7; ZKxUQ: $this->dbforge->add_key($jtbl->name, true); goto QMjFQ; Nx1Ll: if (!($jtbl->primary_key == 1)) { goto yr_CG; } goto ZKxUQ; QMjFQ: yr_CG: goto SJASt; dr9D7: $field = [$jtbl->name => ["\x74\171\x70\145" => $jtbl->type, "\143\157\156\163\164\162\x61\x69\156\164" => $jtbl->max_length, "\156\165\x6c\x6c" => $jtbl->primary_key == 0]]; goto jDjLi; SJASt: a5ViV: goto tLqVk; jDjLi: $this->dbforge->add_field($field); goto Nx1Ll; tLqVk: } goto Fcdu8; Dkz5W: if ($this->db->table_exists($table)) { goto DdnmR; } goto Ilte_; kBurH: goto Fjzfz; goto eBSOp; ozedC: foreach ($json[$table] as $jtbl) { goto ll3mE; KwmC3: $this->dbforge->add_column($table, $field); goto ctLw2; gssMD: $this->dbforge->add_column($table, $field); goto k37KK; ItKHb: $this->dbforge->add_key($jtbl->name, true); goto gssMD; FJYto: $field = array($jtbl->name => array("\x74\171\x70\x65" => $jtbl->type, "\x63\157\156\x73\164\x72\x61\x69\x6e\x74" => $jtbl->max_length, "\x64\145\x66\141\x75\x6c\x74" => $jtbl->default)); goto KwmC3; DoQkQ: foreach ($fields[$table] as $ftbl) { goto DZpsf; j4GTU: $this->dbforge->add_key($jtbl->name, true); goto eLmca; kOSxx: $field = array($jtbl->name => array("\x74\x79\x70\x65" => $jtbl->type, "\143\157\156\x73\164\x72\141\x69\x6e\x74" => $jtbl->max_length, "\x6e\165\x6c\154" => false)); goto TUCK7; eLmca: $this->dbforge->modify_column($table, $field); goto cn9kK; ZyPKR: HqNjZ: goto j4GTU; HVSAr: vVYxw: goto UHFCP; UHFCP: $field = array($jtbl->name => array("\x74\171\160\x65" => $jtbl->type, "\x63\157\x6e\163\x74\162\x61\x69\156\x74" => $jtbl->max_length, "\156\165\154\154" => false, "\x61\165\164\x6f\x5f\151\x6e\x63\x72\x65\155\x65\x6e\x74" => true)); goto ZyPKR; HZZBa: $field = array($jtbl->name . "\40\144\x61\164\145\x74\x69\155\145\x20\x64\145\x66\141\165\x6c\164\x20\143\165\162\162\145\x6e\x74\137\x74\x69\155\x65\x73\164\141\x6d\160" . $onUpdate); goto AD4m0; lpfxm: goto ZMZg4; goto UGqV3; UGqV3: ghi8O: goto RKLo8; oV4J6: LKKRL: goto WEfQw; a5eJV: if ($jtbl->default == "\103\125\122\122\105\x4e\124\x5f\x54\111\x4d\105\123\124\x41\115\x50") { goto ghi8O; } goto mYpGm; fEpDA: nW_ME: goto oV4J6; AM6uc: N1gXk: goto BfSiJ; AD4m0: ZMZg4: goto LATY0; DZpsf: if (!($jtbl->name == $ftbl->name)) { goto cmAJH; } goto pq6tu; hzTtN: sTdO1: goto a5eJV; E_DDg: if ($jtbl->auto_increment == true) { goto vVYxw; } goto kOSxx; mYpGm: $field = array($jtbl->name => array("\164\x79\x70\145" => $jtbl->type, "\x63\157\156\x73\x74\x72\x61\x69\x6e\x74" => $jtbl->max_length, "\144\x65\146\141\x75\x6c\x74" => $jtbl->default)); goto lpfxm; cn9kK: goto nW_ME; goto hzTtN; LATY0: $this->dbforge->modify_column($table, $field); goto fEpDA; RKLo8: $onUpdate = isset($jtbl->extra) ? "\x20" . strtolower($jtbl->extra) : ''; goto HZZBa; hixeL: if ($jtbl->primary_key == 0) { goto sTdO1; } goto E_DDg; WEfQw: cmAJH: goto AM6uc; pq6tu: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto LKKRL; } goto hixeL; TUCK7: goto HqNjZ; goto HVSAr; BfSiJ: } goto UcZGY; h4u9Z: F5xTh: goto DoQkQ; KpEmm: $field = array($jtbl->name => array("\164\x79\x70\x65" => $jtbl->type, "\143\157\156\x73\164\x72\x61\151\x6e\x74" => $jtbl->max_length, "\x6e\165\154\154" => false)); goto ItKHb; xnl13: if ($jtbl->primary_key == 0) { goto li3ua; } goto KpEmm; iizXo: ZcX3l: goto KWSgJ; k37KK: goto ODmta; goto Psf_e; hBx9f: JXOoi: goto iizXo; Psf_e: li3ua: goto FJYto; ll3mE: if ($this->db->field_exists($jtbl->name, $table)) { goto F5xTh; } goto xnl13; Y4ETi: goto JXOoi; goto h4u9Z; UcZGY: On0zs: goto hBx9f; ctLw2: ODmta: goto Y4ETi; KWSgJ: } goto dlAa1; Di45U: kI2iR: goto kBurH; Fcdu8: MBNAO: goto j1b5L; iNyhs: $this->db->query("\x41\x4c\x54\x45\122\40\x54\x41\102\114\105\x20\40\x60" . $table . "\140\40\x45\x4e\x47\111\116\x45\40\75\40\x49\x6e\156\157\x44\x42"); goto Di45U; j1b5L: $this->dbforge->create_table($table, TRUE); goto iNyhs; wS_Bn: UCvvJ: goto HA_Jc; eBSOp: DdnmR: goto zOYFl; dlAa1: fed0o: goto wS_Bn; xGdkM: Mygu8: goto NKP9N; NKP9N: } goto YOg9T; rwTYk: $tbl_baru = array_keys($json); goto mr1Ar; UtRkd: $json = file_get_contents("\x2e\x2f\141\x73\163\x65\x74\163\57\x61\160\x70\x2f\144\x62\x2f\x64\141\164\x61\x62\141\163\x65\56\x6a\163\157\156"); goto eh9Eb; YOg9T: gXtEs: goto dBq0n; mEPb7: } public function checkDb() { goto FyAV7; tybz3: $edit_columns = []; goto nbhTD; FyAV7: $db_debug = $this->db->db_debug; goto Mo9V6; qR_oz: foreach ($tabless as $table) { goto PVx7g; PVx7g: $sql = "\123\x45\x4c\105\103\x54\40\140\x63\157\x6c\x75\x6d\x6e\x5f\156\141\x6d\x65\x60\x2c\40\140\143\157\154\165\155\156\x5f\x74\x79\160\145\140\x2c\x20\x60\x63\157\154\x6c\141\164\151\x6f\x6e\x5f\x6e\x61\155\x65\140\x2c\40\x60\x64\x61\x74\141\137\x74\171\x70\145\140\x2c\x20\140\143\x68\141\162\x61\143\164\x65\162\137\x6d\x61\170\x69\155\x75\x6d\137\x6c\x65\156\147\x74\x68\x60\54\40\140\x6e\165\x6d\145\162\x69\143\x5f\x70\162\145\143\151\x73\x69\x6f\156\x60\x2c" . "\x20\140\x63\157\x6c\x75\155\x6e\137\x64\145\146\141\x75\x6c\164\x60\x2c\40\x60\x63\x6f\154\165\155\156\x5f\x6b\x65\171\140\54\x20\x60\x63\157\154\x75\x6d\x6e\137\x63\157\155\x6d\145\156\x74\x60\54\x20\x60\x65\170\164\x72\141\x60\x2c\40\x60\x69\163\137\156\165\x6c\154\x61\x62\x6c\x65\x60\15\12\x9\11\11\106\122\117\115\40\140\x69\x6e\x66\157\x72\x6d\x61\x74\151\x6f\x6e\x5f\163\143\150\x65\155\x61\x60\x2e\140\x63\157\154\165\x6d\x6e\x73\140\x20\x57\x48\105\x52\x45\40\164\141\x62\154\145\137\x73\143\x68\145\x6d\141\40\75\40\x22" . $this->db->database . "\x22\40\x41\x4e\x44\x20\x74\141\142\154\x65\137\x6e\141\x6d\145\40\x3d\40\x22" . $table . "\x22"; goto ItYdL; pwtJ2: $i = 0; goto KNdNA; UWkTe: $retval[$i]->default = $query[$i]->column_default; goto gSWCv; bvCsv: $i++; goto OXVg5; rNRVI: upydd: goto bvCsv; xUu_B: if (!($i < $c)) { goto Wpw6B; } goto ub1nz; ItYdL: if (!(($query = $this->db->query($sql)) === FALSE)) { goto HkYde; } goto AfHQ3; APmW1: $fields[$table] = (object) ["\164\141\x62\154\145\137\156\x61\155\x65" => $table, "\143\157\154\x75\x6d\x6e\163" => $retval]; goto qtbs0; G8MIF: $retval[$i]->type = $query[$i]->data_type; goto i533P; x8Hcp: h3_Un: goto xUu_B; oHuh2: Wpw6B: goto APmW1; Y3inw: $retval[$i]->extra = $query[$i]->extra; goto recEk; V_yiK: $retval[$i]->name = $query[$i]->column_name; goto uq6_m; uq6_m: $retval[$i]->col_type = $query[$i]->column_type; goto G8MIF; qtbs0: vmAM6: goto Izwjr; AfHQ3: $fields = FALSE; goto PWRST; gSWCv: $retval[$i]->comment = $query[$i]->column_comment; goto Y3inw; OXVg5: goto h3_Un; goto oHuh2; recEk: $retval[$i]->nullable = $query[$i]->is_nullable; goto e7tgc; AaOcE: $query = $query->result_object(); goto c6e20; e7tgc: $retval[$i]->primary = $query[$i]->column_key; goto rNRVI; ub1nz: $retval[$i] = new stdClass(); goto V_yiK; PWRST: HkYde: goto AaOcE; c6e20: $retval = array(); goto pwtJ2; i533P: $retval[$i]->collation = $query[$i]->collation_name; goto xGid1; xGid1: $retval[$i]->max_length = $query[$i]->character_maximum_length > 0 ? $query[$i]->character_maximum_length : $query[$i]->numeric_precision; goto UWkTe; KNdNA: $c = count($query); goto x8Hcp; Izwjr: } goto iOq62; x563H: PB_QH: goto CCVwV; gfmoC: $fields = []; goto qR_oz; jeNuC: foreach ($full_tables as $table) { goto ZKJYH; t16tH: $script = "\x43\x52\105\101\x54\105\x20\124\101\102\114\105\40\x60" . $table . "\140\x20\x28"; goto rZV1T; lhghI: iwO6P: goto TUNO9; ddZH6: $script_edit_column[$table] = "\101\x4c\124\x45\122\x20\x54\x41\x42\x4c\105\x20\x60" . $table . "\x60\40" . implode("\54\40", $modif_column) . "\73"; goto mQ43i; gNM4U: tvgqQ: goto Myqtl; qsxEV: $add_column = []; goto GpFMC; ZKJYH: if (!$this->db->table_exists($table)) { goto iwO6P; } goto JAIif; JAIif: if (!isset($json[$table])) { goto gPDg0; } goto qsxEV; hVMay: foreach ($json[$table]->columns as $column) { goto TsYe0; UV_oI: if ($column->type == "\x69\x6e\x74") { goto rXjno; } goto Qk3IS; tIJ8f: rXjno: goto F5Sge; sFxtT: TpB8T: goto TZjm4; xLkPx: goto fNCFE; goto XR4XV; H9WrI: goto fNCFE; goto YGGVf; M2ChI: $length = ''; goto xLkPx; qNAHZ: $nullable = $column->nullable == "\116\x4f" ? "\x20\116\117\124\x20\x4e\125\x4c\114" : ''; goto VsHbC; ZFaoj: $pri .= $column->primary != '' ? "\x50\122\x49\115\x41\x52\131\40\x4b\x45\131\x20\x28\x60" . $column->name . "\140\51" : ''; goto pzCAJ; XR4XV: WsQVo: goto UV_oI; TZjm4: fNCFE: goto qNAHZ; VsHbC: $default = $column->default == null ? '' : "\x20\104\x45\x46\x41\x55\x4c\x54\40" . $column->default; goto X8GCa; zTFWQ: if ($column->type != "\154\157\156\x67\164\145\x78\x74" && $column->type != "\155\x65\144\151\165\x6d\164\145\x78\164" && $column->type != "\164\145\170\164") { goto WsQVo; } goto xMVNj; X8GCa: $extra = $column->extra == '' ? '' : "\40" . strtoupper($column->extra); goto Tg4_T; F5Sge: $length = "\x28" . ($column->max_length + 1) . "\x29"; goto sFxtT; C7FmK: goto TpB8T; goto tIJ8f; Tg4_T: $comment = $column->comment == '' ? '' : "\x20\x43\117\115\x4d\105\x4e\x54\x20\x27" . $column->comment . "\x27"; goto vxzJ9; vxzJ9: $script .= "\140" . $column->name . "\140\40" . $column->type . $length . $nullable . $default . $extra . $comment . "\x2c\40"; goto ZFaoj; pzCAJ: irP8c: goto cEQ9u; xMVNj: $length = ''; goto H9WrI; Qk3IS: $length = "\50" . $column->max_length . "\51"; goto C7FmK; TsYe0: if ($column->max_length == null) { goto uARbq; } goto zTFWQ; YGGVf: uARbq: goto M2ChI; cEQ9u: } goto Z1DE9; LPJHW: $script .= $pri . "\51\x20\105\116\x47\111\116\x45\x3d\x49\156\x6e\157\x44\102\x20\104\x45\106\x41\125\114\124\40\x43\110\x41\x52\x53\105\x54\x3d\165\164\146\70\155\142\x34\x3b"; goto t1tWo; mQ43i: Ii2Ux: goto y4_lL; QQh82: goto yJ6xS; goto lhghI; rZV1T: $pri = ''; goto hVMay; MuBd2: M2Pah: goto Gcu3E; y4_lL: gPDg0: goto QQh82; Gcu3E: if (!(count($add_column) > 0)) { goto tvgqQ; } goto bTiGj; j27yZ: t_Jxz: goto z046j; GpFMC: $modif_column = []; goto oDisM; t1tWo: $script_create_table[$table] = $script; goto HMkv7; TUNO9: $create_tables[] = $json[$table]; goto t16tH; Myqtl: if (!(count($modif_column) > 0)) { goto Ii2Ux; } goto ddZH6; bTiGj: $script_create_column[$table] = "\101\x4c\124\x45\x52\x20\x54\101\x42\114\105\x20\140" . $table . "\140\x20" . implode("\x2c\40", $add_column) . "\73"; goto gNM4U; oDisM: foreach ($json[$table]->columns as $jtbl) { goto g_i5x; Oa_mu: NB6iO: goto tgFhO; BTDpB: Tw9GH: goto LLZYr; eifOT: $length = "\x28" . $jtbl->max_length . "\51"; goto dGc9s; Ztkql: goto O5mvg; goto BTDpB; RTBds: shpz8: goto OpTUN; Bt5B_: goto O5mvg; goto Oa_mu; OpTUN: $comment = $jtbl->comment == '' ? '' : "\x20\103\117\x4d\x4d\105\x4e\124\40\x27" . $jtbl->comment . "\x27"; goto mDAKB; vLIiN: $extra .= "\x20\120\122\x49\x4d\x41\122\x59\40\x4b\x45\x59"; goto RTBds; dgrqj: O5mvg: goto Jl00G; pdQnD: $default = $jtbl->default == null ? '' : "\x20\104\105\x46\x41\125\114\124\x20" . $jtbl->default; goto Zv20Y; MMgbY: foreach ($fields[$table]->columns as $ftbl) { goto N2x18; Ss4Jd: IHdLT: goto A028M; Aqa4i: F3j7J: goto R1qaH; InFAM: if (!($jtbl->col_type != $ftbl->col_type)) { goto T0j2A; } goto Xkzyh; OhCLm: goto F3j7J; goto jOxSO; Tc2jy: jPRSc: goto P5Uk6; xz1SY: $edit_columns[$table][$jtbl->name]["\x6e\x75\154\x6c\141\142\154\145"] = $jtbl->nullable; goto CqWdG; CqWdG: sqQgj: goto YC17j; qckxB: b71OJ: goto dDTaU; H6gGV: $edit_columns[$table][$jtbl->name]["\143\x6f\x6d\155\x65\x6e\x74"] = $jtbl->comment; goto YVMZx; P5Uk6: if (!($jtbl->extra != $ftbl->extra)) { goto A2p13; } goto h0Mj4; BHtUU: array_push($modif_column, "\x41\104\104\40\125\x4e\111\x51\x55\x45\40\x4b\x45\x59\40\x60" . $jtbl->name . "\x60\x20\50\x60" . $jtbl->name . "\140\x29"); goto Aqa4i; IqLwW: if (!($ftbl->default != null)) { goto BX9we; } goto mvmNg; Qq7x7: array_push($modif_column, "\101\x44\104\x20\x50\x52\x49\x4d\101\122\x59\40\x4b\105\131\x20\50\140" . $jtbl->name . "\140\x29"); goto yL1JC; SsdwE: T0j2A: goto lqmR9; x8NI9: $edit_columns[$table][$jtbl->name]["\144\145\x66\x61\x75\x6c\164"] = $jtbl->default; goto qckxB; A028M: if (!($ftbl->extra != null)) { goto jPRSc; } goto VD4Kt; VD4Kt: $ftbl->extra = str_replace("\x28\51", '', $ftbl->extra); goto Jx7Ot; Jx7Ot: $ftbl->extra = strtoupper($ftbl->extra); goto Tc2jy; jCMsB: if (!($jtbl->primary != $ftbl->primary)) { goto qgb37; } goto OVX4P; QScHz: $jtbl->extra = strtoupper($jtbl->extra); goto Ss4Jd; ww_Ci: $jtbl->default = str_replace("\50\51", '', $jtbl->default); goto C3nL7; mITKf: if (!($jtbl->col_type != $ftbl->col_type || $jtbl->nullable != $ftbl->nullable || $jtbl->default != $ftbl->default || $jtbl->extra != $ftbl->extra || $jtbl->comment != $ftbl->comment)) { goto gisQ0; } goto yvy4w; h0Mj4: $edit_columns[$table][$jtbl->name]["\145\x78\x74\162\141"] = $jtbl->extra; goto b10N_; KMFuD: PMEtS: goto BHtUU; Xkzyh: $edit_columns[$table][$jtbl->name]["\x63\x6f\154\x5f\164\x79\160\145"] = $jtbl->col_type; goto SsdwE; C3nL7: $jtbl->default = strtoupper($jtbl->default); goto IQL6A; jOxSO: zf32k: goto Qq7x7; X6mEM: if (!($jtbl->default != $ftbl->default)) { goto b71OJ; } goto x8NI9; lqmR9: if (!($jtbl->nullable != $ftbl->nullable)) { goto sqQgj; } goto xz1SY; Kk2I5: G6PEy: goto rMLZA; gS0eY: if (strtolower($jtbl->primary) == "\165\156\151") { goto PMEtS; } goto OhCLm; nkKB0: $ftbl->default = strtoupper($ftbl->default); goto ZSz3k; OUJTJ: gisQ0: goto Kk2I5; wL_yG: if (!($jtbl->comment != $ftbl->comment)) { goto gQyrO; } goto H6gGV; tKvUy: $jtbl->extra = str_replace("\50\x29", '', $jtbl->extra); goto QScHz; dDTaU: if (!($jtbl->extra != null)) { goto IHdLT; } goto tKvUy; YC17j: if (!($jtbl->default != null)) { goto ntDtX; } goto ww_Ci; J1rIZ: $default = $jtbl->default == null ? '' : "\40\104\105\106\101\x55\114\x54\x20" . $jtbl->default; goto F0K0T; OVX4P: $edit_columns[$table][$jtbl->name]["\160\x72\151\x6d\141\x72\171"] = $jtbl->primary; goto S8bkx; S8bkx: if (strtolower($jtbl->primary) == "\160\162\151") { goto zf32k; } goto gS0eY; yL1JC: goto F3j7J; goto KMFuD; IQL6A: ntDtX: goto IqLwW; YVMZx: gQyrO: goto jCMsB; yvy4w: $nullable = $jtbl->nullable == "\x4e\x4f" ? "\40\116\117\x54\x20\x4e\125\x4c\114" : ''; goto J1rIZ; N2x18: if (!($jtbl->name == $ftbl->name)) { goto G6PEy; } goto InFAM; ok1zP: $comment = $jtbl->comment == '' ? '' : "\x20\103\117\115\x4d\x45\116\124\x20\x27" . $jtbl->comment . "\47"; goto Dm9RU; ZSz3k: BX9we: goto X6mEM; R1qaH: qgb37: goto mITKf; rMLZA: SDXtc: goto DYD7D; mvmNg: $ftbl->default = str_replace("\50\51", '', $ftbl->default); goto nkKB0; b10N_: A2p13: goto wL_yG; Dm9RU: array_push($modif_column, "\115\117\x44\111\106\x59\40\140" . $jtbl->name . "\140\x20" . $jtbl->col_type . $nullable . $default . $extra . $comment); goto OUJTJ; F0K0T: $extra = $jtbl->extra == '' ? '' : "\x20" . strtoupper($jtbl->extra); goto ok1zP; DYD7D: } goto blM02; IlZZp: if ($jtbl->type != "\154\157\156\x67\x74\145\x78\x74" && $jtbl->type != "\x6d\145\144\x69\x75\x6d\x74\x65\x78\164" && $jtbl->type != "\x74\145\x78\164") { goto Tw9GH; } goto sc17P; D5rjX: if (!(strtoupper($extra) == "\x20\x41\x55\x54\117\137\111\x4e\103\x52\x45\115\105\x4e\124")) { goto shpz8; } goto vLIiN; PDeK7: lSrPQ: goto Y1NL8; LLZYr: if ($jtbl->type == "\x69\x6e\x74") { goto lSrPQ; } goto eifOT; g_i5x: if ($this->db->field_exists($jtbl->name, $table)) { goto NiJ1Z; } goto wgNws; Xprzk: fZbo2: goto dgrqj; sc17P: $length = ''; goto Bt5B_; wgNws: $add_columns[$table][] = $jtbl; goto Aqvb1; dGc9s: goto fZbo2; goto PDeK7; blM02: P4gBt: goto aEXxc; aEXxc: VhclK: goto N8u9f; N2l6w: NiJ1Z: goto MMgbY; tgFhO: $length = ''; goto Ztkql; Jl00G: $nullable = $jtbl->nullable == "\116\117" ? "\40\x4e\117\124\40\116\x55\x4c\x4c" : ''; goto pdQnD; Aqvb1: if ($jtbl->max_length == null) { goto NB6iO; } goto IlZZp; mDAKB: array_push($add_column, "\x41\x44\104\x20\x60" . $jtbl->name . "\140\x20" . $jtbl->type . $length . $nullable . $default . $extra . $comment); goto N2l6w; Zv20Y: $extra = $jtbl->extra == '' ? '' : "\40" . strtoupper($jtbl->extra); goto D5rjX; Y1NL8: $length = "\x28" . ($jtbl->max_length + 1) . "\51"; goto Xprzk; N8u9f: } goto MuBd2; Z1DE9: ndzqb: goto LPJHW; HMkv7: yJ6xS: goto j27yZ; z046j: } goto x563H; yDMh4: $json = file_get_contents("\56\57\x61\163\163\145\x74\x73\57\x61\x70\160\x2f\144\x62\x2f\x64\x61\x74\x61\x62\x61\163\145\56\x6a\x73\x6f\156"); goto xXH0N; Mo9V6: $this->db->db_debug = FALSE; goto MKGSM; xXH0N: $json = json_decode($json); goto t4eOW; SgKPZ: $this->output_json($data); goto g5H62; R5VL9: $script_create_column = []; goto tybz3; ZfJjt: $full_tables = array_merge($tbl_seharusnya, $tbl_ada); goto MLlIi; ADpn6: sort($full_tables); goto RhmWe; fEnf4: $tbl_seharusnya = array_keys($json); goto uaki0; MKGSM: $tabless = $this->db->list_tables(); goto gfmoC; RhmWe: $create_tables = []; goto xZAm3; uaki0: $tbl_ada = array_keys($fields); goto ZfJjt; wSfj8: $add_columns = []; goto R5VL9; t4eOW: $json = (array) $json; goto fEnf4; xZAm3: $script_create_table = []; goto wSfj8; MLlIi: $full_tables = array_unique($full_tables); goto ADpn6; iOq62: SyRGq: goto yDMh4; CCVwV: $this->db->db_debug = $db_debug; goto LL_D3; LL_D3: $data = ["\x66\x69\145\154\144\x73" => $fields, "\x63\x72\x65\x61\164\145\137\164\x61\x62\154\145\163" => $create_tables, "\x63\157\165\x6e\x74\x5f\164\x62\154" => count($create_tables), "\x61\144\144\137\143\x6f\x6c\x75\x6d\156\x73\137\x74\157\x5f\x74\141\x62\154\x65" => $add_columns, "\143\157\165\x6e\x74\x5f\x63\157\154" => count($add_columns), "\x65\144\x69\x74\137\x63\157\x6c\x75\x6d\156\163" => $edit_columns, "\143\157\x75\x6e\164\137\x6d\x6f\144" => count($edit_columns), "\x61\144\x64\137\x74\x62\154" => $this->encryption->encrypt(json_encode($script_create_table)), "\x61\144\144\137\x63\x6f\154" => $this->encryption->encrypt(json_encode($script_create_column)), "\155\x6f\144\137\143\x6f\154" => $this->encryption->encrypt(json_encode($script_edit_column))]; goto SgKPZ; nbhTD: $script_edit_column = []; goto jeNuC; g5H62: } public function createTable() { goto AhpwE; Emwqh: sleep(1); goto RQuX3; j2dXV: $this->output_json($data); goto ppyL2; HVSeX: $data["\163\165\x63\143\145\163\x73"] = $this->runQuery($queries); goto ciygv; wzXeJ: str_replace("\45\62\102", "\x2b", $scripts); goto Emwqh; uoHk7: $queries = ''; goto EvTpA; AhpwE: $scripts = $this->input->post("\144\x61\x74\x61", true); goto wzXeJ; RQuX3: $scripts = json_decode($this->encryption->decrypt($scripts)); goto uoHk7; ciygv: $data["\x6d\145\x73\x73\141\147\x65"] = "\125\x70\144\141\164\145\40\153\x6f\x6c\x6f\x6d"; goto j2dXV; EvTpA: foreach ($scripts as $script) { $queries .= $script; D048j: } goto EUxIx; EUxIx: yGbdO: goto HVSeX; ppyL2: } public function createColumn() { goto EMblY; MgSfy: $data["\155\145\x73\163\141\x67\x65"] = "\115\x6f\x64\x69\146\171\40\153\x6f\154\x6f\x6d"; goto urfVq; VVmFq: if (!(strpos("\x60\165\x69\144\x60", $queries) !== false)) { goto yUUzD; } goto omSGT; aGU2k: yUUzD: goto fBeU2; TMsVN: $scripts = json_decode($this->encryption->decrypt($scripts)); goto sTgth; f1OBe: Ek3wz: goto VVmFq; sTgth: $queries = ''; goto nLtmh; aY3Dk: str_replace("\45\62\x42", "\x2b", $scripts); goto wXkW4; fBeU2: $data["\163\x75\143\x63\145\x73\163"] = $this->runQuery($queries); goto MgSfy; nLtmh: foreach ($scripts as $script) { $queries .= $script; FE_Uk: } goto f1OBe; EMblY: $scripts = $this->input->post("\x64\141\164\141", true); goto aY3Dk; wXkW4: sleep(1); goto TMsVN; urfVq: $this->output_json($data); goto r_IgD; omSGT: $this->updateUID(); goto aGU2k; r_IgD: } public function editColumn() { goto wuzZN; puygH: $data["\155\x65\x73\163\141\147\x65"] = "\x55\x70\x64\x61\164\145\40\163\x65\x6c\x65\x73\141\x69"; goto dElK2; YMCzP: sleep(1); goto H5P9L; dElK2: $this->output_json($data); goto q6eff; C_Kqn: str_replace("\45\62\x42", "\53", $scripts); goto YMCzP; zLmQF: FQohs: goto bv7zt; s2NVS: $queries = ''; goto H7OhO; bv7zt: $data["\163\165\143\143\x65\163\x73"] = $this->runQuery($queries); goto puygH; H7OhO: foreach ($scripts as $script) { $queries .= $script; hL5sk: } goto zLmQF; H5P9L: $scripts = json_decode($this->encryption->decrypt($scripts)); goto s2NVS; wuzZN: $scripts = $this->input->post("\144\141\x74\141", true); goto C_Kqn; q6eff: } function runQuery($script) { goto Eo6Aj; Msw03: $hostuser = $this->db->username; goto qlLkc; wKKFO: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto RYf0O; l9vrS: $mysqli->close(); goto p089s; p089s: return true; goto VeG3s; qlLkc: $hostpass = $this->db->password; goto JPwaB; VpNxq: $mysqli->multi_query($script); goto l9vrS; Eo6Aj: $hostname = $this->db->hostname; goto Msw03; RYf0O: if (!mysqli_connect_errno()) { goto vhQJz; } goto mW6cg; ieFTP: vhQJz: goto VpNxq; mW6cg: return mysqli_connect_errno(); goto ieFTP; JPwaB: $database = $this->db->database; goto wKKFO; VeG3s: } function updateUID() { goto u1bmb; HE8u8: return $this->db->update_batch("\155\x61\x73\x74\145\x72\x5f\x73\x69\163\x77\141", $input, "\151\x64\x5f\x73\x69\163\167\x61"); goto Ij_Ms; hBtWE: $siswas = $this->db->get("\155\x61\x73\x74\145\x72\x5f\163\151\x73\167\141")->result(); goto CVzYc; P1rk3: foreach ($siswas as $siswa) { $input[] = array("\x69\x64\137\163\151\x73\x77\x61" => $siswa->id_siswa, "\165\151\x64" => $this->uuid->v4()); zDiIR: } goto Xhslr; u1bmb: $this->load->library("\x55\x75\151\x64", "\x75\165\151\x64"); goto hBtWE; Xhslr: uDgI1: goto HE8u8; CVzYc: $input = array(); goto P1rk3; Ij_Ms: } function make_base() { } }
