<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto cT15c; peYgQ: gy9av: goto iIRfM; OH2PU: exit("\116\x6f\x20\144\x69\162\145\x63\164\x20\x73\143\x72\x69\160\164\40\141\x63\x63\145\163\x73\40\141\x6c\x6c\x6f\167\145\x64"); goto peYgQ; cT15c: if (defined("\102\101\123\105\120\x41\x54\110")) { goto gy9av; } goto OH2PU; iIRfM: class Compare extends CI_Controller { function __construct() { goto lM8sf; Nrljd: $this->CHARACTER_SET = "\x75\x74\146\x38\x20\103\117\x4c\114\101\124\105\x20\165\x74\x66\x38\x5f\147\145\156\x65\162\141\154\x5f\143\x69"; goto QjoQA; lM8sf: parent::__construct(); goto Nrljd; Xy_uS: $this->DB2 = $this->load->database("\x6c\151\x76\x65", TRUE); goto QzU2Q; QjoQA: $this->DB1 = $this->load->database("\x6d\x61\151\x6e\x5f\147\x61\x72\165\144\x61", TRUE); goto Xy_uS; QzU2Q: } function index() { goto GFkYo; n1iwm: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\x64\x72\x6f\x70")) : array(); goto dO8De; q8W53: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto Lm91v; nC1mT: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\x63\x72\145\x61\x74\145")) : array(); goto n1iwm; cCTxB: $tables_to_drop = array_diff($live_tables, $development_tables); goto nC1mT; YBv_W: sOx9F: goto XESpI; b9KwL: echo "\x3c\x70\76\x54\150\145\x20\146\x6f\154\154\x6f\x77\151\x6e\147\40\123\x51\x4c\40\143\x6f\155\x6d\x61\156\x64\x73\x20\x6e\x65\x65\x64\x20\x74\157\40\x62\x65\40\x65\x78\145\x63\x75\164\x65\144\x20\x74\157\40\x62\162\151\156\x67\40\164\150\145\40\114\151\x76\145\x20\144\141\164\141\x62\x61\163\x65\x20\x74\x61\142\154\x65\163\x20\165\160\x20\x74\157\x20\144\141\164\145\72\x20\74\57\x70\76\12"; goto fAYEi; DU0Gu: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\12"; qN9D2: } goto krmWW; D2RDB: $tables_to_create = array_diff($development_tables, $live_tables); goto cCTxB; fAYEi: echo "\x3c\160\162\145\x20\163\x74\171\154\145\x3d\47\x70\141\x64\144\151\156\147\72\x20\62\60\x70\170\73\40\142\x61\143\x6b\x67\x72\x6f\x75\x6e\144\x2d\143\x6f\x6c\157\162\x3a\x20\x23\106\x46\106\101\106\x30\73\x27\76\xa"; goto DU0Gu; krmWW: waRA5: goto iYsZA; eyynR: echo "\x3c\150\62\76\124\150\x65\x20\x64\x61\164\141\x62\x61\163\145\40\x61\160\x70\x65\x61\x72\163\40\x74\x6f\40\x62\145\x20\165\x70\x20\x74\x6f\x20\x64\x61\164\145\x3c\x2f\150\x32\x3e\12"; goto XgiiF; Lm91v: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto XIitg; } goto eyynR; NF8v7: $development_tables = $this->DB1->list_tables(); goto vUPre; XgiiF: goto sOx9F; goto q8brr; dO8De: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto RefmD; GFkYo: $sql_commands_to_run = array(); goto NF8v7; RefmD: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto q8W53; q8brr: XIitg: goto qCYfu; qCYfu: echo "\x3c\x68\62\x3e\124\150\x65\40\x64\141\x74\141\142\x61\x73\x65\40\x69\x73\40\157\165\x74\40\157\x66\x20\123\171\156\143\41\x3c\x2f\x68\x32\x3e\12"; goto b9KwL; iYsZA: echo "\74\x70\x72\x65\76\xa"; goto YBv_W; vUPre: $live_tables = $this->DB2->list_tables(); goto D2RDB; XESpI: } function manage_tables($tables, $action) { goto QRl0_; akFGX: if (!($action == "\143\162\145\x61\164\x65")) { goto CXA4R; } goto DCVfj; S6n4l: foreach ($tables as $table) { $sql_commands_to_run[] = "\x44\x52\x4f\120\x20\x54\x41\x42\114\105\40{$table}\x3b"; OPvpT: } goto xkUOP; oQ3MM: Fk0lj: goto iXB3w; nhsWI: Fx0Ox: goto uE9YL; xkUOP: EzXa_: goto oQ3MM; QRl0_: $sql_commands_to_run = array(); goto akFGX; iXB3w: return $sql_commands_to_run; goto P4u6z; uE9YL: CXA4R: goto D_Otx; D_Otx: if (!($action == "\x64\x72\x6f\x70")) { goto Fk0lj; } goto S6n4l; DCVfj: foreach ($tables as $table) { goto t_zc3; qAUTd: $table_structure = $query->row_array(); goto mlVdu; mlVdu: $sql_commands_to_run[] = $table_structure["\103\162\145\x61\164\145\40\124\141\142\154\x65"] . "\x3b"; goto c3ayD; c3ayD: D8Pd2: goto UISiL; t_zc3: $query = $this->DB1->query("\x53\x48\x4f\x57\x20\103\x52\105\101\x54\105\40\x54\x41\x42\114\x45\40\x60{$table}\x60\x20\x2d\55\40\x63\x72\145\x61\164\x65\40\x74\x61\142\x6c\145\x73"); goto qAUTd; UISiL: } goto nhsWI; P4u6z: } function compare_table_structures($development_tables, $live_tables) { goto H1R5s; H1R5s: $tables_need_updating = array(); goto G6F62; apxtl: foreach ($development_tables as $table) { goto CYXTy; OIrvG: QXkCT: goto QGQaA; loUs5: $development_table_structures[$table] = $table_structure["\103\162\145\x61\x74\x65\40\124\x61\142\154\x65"]; goto OIrvG; NRy5_: $table_structure = $query->row_array(); goto loUs5; CYXTy: $query = $this->DB1->query("\123\110\x4f\127\40\103\122\x45\101\x54\x45\x20\124\101\102\x4c\105\x20\140{$table}\140\40\55\x2d\40\x64\x65\166"); goto NRy5_; QGQaA: } goto Rct_c; DG85_: foreach ($development_tables as $table) { goto sDmCh; gG6ww: SX318: goto cHc0y; v2qir: vbK2R: goto gG6ww; bxMGx: $tables_need_updating[] = $table; goto v2qir; sDmCh: $development_table = $development_table_structures[$table]; goto zRmV3; bDMzm: if (!($this->count_differences($development_table, $live_table) > 0)) { goto vbK2R; } goto bxMGx; zRmV3: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto bDMzm; cHc0y: } goto efjBM; G6F62: $live_table_structures = $development_table_structures = array(); goto apxtl; kMPiY: TKGWv: goto DG85_; efjBM: TRDxY: goto ZSe4R; ZSe4R: return $tables_need_updating; goto VPmfe; Rct_c: eLJU6: goto p4e2r; p4e2r: foreach ($live_tables as $table) { goto eIye7; eIye7: $query = $this->DB2->query("\x53\110\117\x57\40\103\x52\x45\x41\x54\105\x20\124\101\102\x4c\x45\40\x60{$table}\140\x20\55\x2d\x20\x6c\151\x76\145"); goto Vw9Qd; ipCO1: ok3YF: goto cDyDA; F4mbo: $live_table_structures[$table] = $table_structure["\x43\x72\x65\141\x74\145\40\x54\141\142\154\x65"]; goto ipCO1; Vw9Qd: $table_structure = $query->row_array(); goto F4mbo; cDyDA: } goto kMPiY; VPmfe: } function count_differences($old, $new) { goto Y30L2; BnRyq: DMUx2: goto z_wfj; oPK2t: return $differences; goto bJ7kd; z_wfj: $i++; goto owB43; Lu8jk: AWUsq: goto BnRyq; ahEEP: $i = 0; goto MLLCB; Y30L2: $differences = 0; goto nJTZY; vBL2h: $old = explode("\40", $old); goto HKj5O; fKDV7: if (!($old[$i] != $new[$i])) { goto AWUsq; } goto LrkpA; hv85a: cgp_I: goto oPK2t; nJTZY: $old = trim(preg_replace("\57\134\163\53\x2f", '', $old)); goto qdAsL; HKj5O: $new = explode("\x20", $new); goto g0vb3; LrkpA: $differences++; goto Lu8jk; g0vb3: $length = max(count($old), count($new)); goto ahEEP; MLLCB: nGg2D: goto VSFhM; vPE2S: if (!($old == $new)) { goto Ctn37; } goto R6Vi4; owB43: goto nGg2D; goto hv85a; R6Vi4: return $differences; goto WmgG8; qdAsL: $new = trim(preg_replace("\57\x5c\163\x2b\57", '', $new)); goto vPE2S; VSFhM: if (!($i < $length)) { goto cgp_I; } goto fKDV7; WmgG8: Ctn37: goto vBL2h; bJ7kd: } function update_existing_tables($tables) { goto z5ICA; uHXI3: QInyJ: goto FUDNl; rH00G: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto LdlOO; dtifL: $table_structure_development = array(); goto oHGaO; Y2ogZ: if (!(is_array($tables) && !empty($tables))) { goto i7RPu; } goto SufIm; z5ICA: $sql_commands_to_run = array(); goto dtifL; LdlOO: return $sql_commands_to_run; goto OXd4h; oHGaO: $table_structure_live = array(); goto Y2ogZ; SufIm: foreach ($tables as $table) { goto KyTsB; hzWz1: h4kgt: goto zAV2h; KyTsB: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto At9zU; At9zU: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto hzWz1; zAV2h: } goto uHXI3; FUDNl: i7RPu: goto rH00G; OXd4h: } function table_field_data($database, $table) { goto zfr7G; P1dE9: if (!($row = mysql_fetch_assoc($result))) { goto QvFP9; } goto iGzX3; AUWAY: mysql_select_db($database["\x64\141\164\x61\142\x61\x73\x65"]); goto l16jy; snIqw: return $fields; goto NXgrL; iGzX3: $fields[] = $row; goto sup4E; YM3bT: FddxB: goto P1dE9; l16jy: $result = mysql_query("\x53\x48\117\x57\x20\x43\x4f\x4c\x55\x4d\x4e\x53\40\x46\x52\117\115\x20\140{$table}\140"); goto YM3bT; zfr7G: $conn = mysqli_connect($database["\x68\x6f\x73\164\x6e\141\x6d\x65"], $database["\165\163\145\162\x6e\141\155\145"], $database["\160\141\163\x73\x77\157\x72\144"]); goto AUWAY; sup4E: goto FddxB; goto yfA8t; yfA8t: QvFP9: goto snIqw; NXgrL: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto sYlhi; z8D4d: return $sql_commands_to_run; goto TZug7; sYlhi: $sql_commands_to_run = array(); goto HGLRL; rsycQ: ee2Db: goto z8D4d; HGLRL: foreach ($source_field_structures as $table => $fields) { goto uAgle; uAgle: foreach ($fields as $field) { goto iIKOs; n2vy7: $previous_field = $fields[$n]["\x46\151\x65\154\x64"]; goto lTKcf; qh5ut: $add_field .= "\73"; goto DZkmq; iZ2HQ: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto IpQaV; } goto p9j6L; DZkmq: $sql_commands_to_run[] = $add_field; goto Cze1Y; W3ak9: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\106\151\145\x6c\144"] == $destination_field_structures[$table][$n]["\106\x69\x65\154\144"])) { goto Jt6_C; } goto SFd9v; QnUjf: if (!($n < count($fields))) { goto lco1i; } goto W3ak9; rWigA: Zt3X3: goto dmZWw; PHG79: $n++; goto DhcLb; ssTVt: QnXmw: goto n2vy7; MmJJr: $modify_field = ''; goto MS24n; p9j6L: $sql_commands_to_run[] = $modify_field; goto yMMdJ; vqXEl: $add_field .= isset($field["\x45\x78\x74\162\141"]) && $field["\105\170\x74\x72\141"] != '' ? "\x20" . $field["\x45\170\164\162\141"] : ''; goto qh5ut; iIKOs: if ($this->in_array_recursive($field["\106\151\x65\154\144"], $destination_field_structures[$table])) { goto OttZF; } goto GoEKU; AXe29: $modify_field .= isset($fields[$n]["\x4e\165\x6c\154"]) && $fields[$n]["\x4e\165\154\154"] == "\x59\x45\123" ? "\x20\x4e\x55\114\114" : "\x20\116\x4f\x54\x20\116\125\114\114"; goto NDxet; XYtY5: lco1i: goto lbm6R; SFd9v: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto ebde3; pQflx: $modify_field = "\101\x4c\124\x45\x52\x20\x54\101\102\x4c\x45\x20{$table}\40\115\x4f\x44\111\x46\131\x20\103\x4f\x4c\x55\x4d\116\40\140" . $fields[$n]["\x46\151\145\x6c\144"] . "\140\40" . $fields[$n]["\124\x79\x70\145"] . "\40\103\110\101\122\101\x43\x54\105\x52\x20\123\x45\x54\x20" . $this->CHARACTER_SET; goto h09xT; NDxet: $modify_field .= isset($fields[$n]["\x45\x78\x74\162\141"]) && $fields[$n]["\x45\x78\x74\162\x61"] != '' ? "\40" . $fields[$n]["\x45\170\x74\162\141"] : ''; goto GwD75; hCCqj: o4wmI: goto PHG79; P6pyn: $add_field .= isset($field["\x4e\x75\154\154"]) && $field["\116\165\154\154"] == "\131\105\x53" ? "\x20\116\x75\154\x6c" : ''; goto NiITz; uwHfx: $modify_field .= "\x3b"; goto ssTVt; ebde3: if (!(is_array($differences) && !empty($differences))) { goto QnXmw; } goto pQflx; h09xT: $modify_field .= isset($fields[$n]["\104\x65\146\141\x75\154\x74"]) && $fields[$n]["\x44\145\x66\141\x75\x6c\164"] != '' ? "\40\x44\x45\106\101\x55\x4c\124\x20\x27" . $fields[$n]["\104\x65\146\141\x75\154\x74"] . "\47" : ''; goto AXe29; lbm6R: aRWHZ: goto rWigA; yMMdJ: IpQaV: goto hCCqj; DhcLb: goto FieNv; goto XYtY5; lTKcf: Jt6_C: goto iZ2HQ; GoEKU: $add_field = "\x41\114\x54\x45\122\40\124\101\x42\114\105\40{$table}\40\101\104\x44\40\103\117\114\x55\115\x4e\x20\x60" . $field["\106\x69\x65\x6c\144"] . "\140\40" . $field["\124\x79\160\145"] . "\40\103\x48\101\122\x41\103\x54\105\x52\40\x53\x45\x54\40" . $this->CHARACTER_SET; goto P6pyn; Cze1Y: goto aRWHZ; goto EZV8A; GwD75: $modify_field .= isset($previous_field) && $previous_field != '' ? "\40\101\106\x54\105\122\x20" . $previous_field : ''; goto uwHfx; g5aVg: FieNv: goto QnUjf; NiITz: $add_field .= "\x20\x44\x45\106\x41\125\x4c\124\40" . $field["\104\145\146\x61\165\154\x74"]; goto vqXEl; MS24n: $n = 0; goto g5aVg; EZV8A: OttZF: goto MmJJr; dmZWw: } goto mjZJ9; mjZJ9: kmrcv: goto HhIc9; HhIc9: Qp5yj: goto bcd3c; bcd3c: } goto rsycQ; TZug7: } function in_array_recursive($needle, $haystack, $strict = false) { goto ySVQ0; GS2Sn: hy71c: goto kZuwm; ySVQ0: foreach ($haystack as $array => $item) { goto Lu88B; IkiL2: return true; goto z7oDV; RxHV5: FLrNh: goto qUmcc; z7oDV: oAcpA: goto RxHV5; sh3pi: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto oAcpA; } goto IkiL2; Lu88B: $item = $item["\106\x69\x65\x6c\144"]; goto sh3pi; qUmcc: } goto GS2Sn; kZuwm: return false; goto q1koS; q1koS: } }
