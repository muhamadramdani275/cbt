<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\x45\120\x41\x54\110") or exit("\116\157\x20\144\151\x72\145\143\x74\40\163\x63\162\151\x70\164\x20\141\x63\143\145\163\163\40\x61\x6c\154\x6f\167\x65\x64"); class Update extends CI_Controller { function __construct() { goto gpnRo; egKW7: $this->load->library("\x65\156\143\x72\171\160\164\x69\157\156"); goto qKhs6; fLMHP: include APPPATH . "\143\x6f\x6e\x66\151\x67\57\x64\141\x74\141\142\141\x73\145\x2e\x70\150\x70"; goto LjFGp; LjFGp: $this->load->dbforge(); goto qeQVv; qeQVv: $this->load->database(); goto egKW7; gpnRo: parent::__construct(); goto fLMHP; qKhs6: } public function output_json($data, $encode = true) { goto x_sjW; CkiIm: SjK57: goto FGVRB; FGVRB: $this->output->set_content_type("\141\160\160\154\151\143\141\164\151\x6f\156\57\152\x73\x6f\156")->set_output($data); goto Cxt9o; x7ajH: $data = json_encode($data); goto CkiIm; x_sjW: if (!$encode) { goto SjK57; } goto x7ajH; Cxt9o: } public function index() { goto izIys; uu3XQ: $data["\x6a\163\x6f\x6e"] = $json; goto lR5Z8; lR5Z8: $this->load->view("\x69\156\x73\164\141\154\154\57\150\x65\x61\144\x65\x72", $data); goto ABbaa; Z6VSu: $this->load->view("\x69\156\163\x74\141\x6c\154\57\x66\x6f\157\164\145\162"); goto ej0V2; izIys: $json = file_get_contents("\56\x2f\x61\x73\x73\x65\x74\163\x2f\x61\x70\160\x2f\144\142\57\x64\141\x74\141\x62\x61\x73\145\x2e\152\163\157\x6e"); goto rrUrl; bWToV: $json = (array) $json; goto uu3XQ; ABbaa: $this->load->view("\151\x6e\x73\x74\x61\x6c\x6c\x2f\165\160\144\x61\164\145"); goto Z6VSu; rrUrl: $json = json_decode($json); goto bWToV; ej0V2: } function object_to_array($data) { goto Spv_H; jA_pB: return $result; goto CC1Zh; Spv_H: if (!(is_array($data) || is_object($data))) { goto ThVI0; } goto nm7lY; CC1Zh: ThVI0: goto huaB6; nm7lY: $result = []; goto tc0SJ; fwGax: c_8TD: goto jA_pB; tc0SJ: foreach ($data as $key => $value) { $result[$key] = is_array($data) || is_object($data) ? $this->object_to_array($value) : $value; rEVuy: } goto fwGax; huaB6: return $data; goto i97i8; i97i8: } public function checkDatabase() { goto tK7p0; ppMU_: $this->db->db_debug = FALSE; goto Jmvji; WLDJj: JPfRc: goto vi3aU; yDLEH: $json = file_get_contents("\56\57\141\163\163\145\x74\163\57\141\x70\160\57\144\142\57\x64\141\164\141\x62\x61\163\145\x2e\x6a\163\157\156"); goto smeNU; smeNU: $json = json_decode($json); goto wL1eM; GHARP: $edit_columns = []; goto lFQsV; cW_9x: $tbl_ada = array_keys($fields); goto C9UCn; tK7p0: $db_debug = $this->db->db_debug; goto ppMU_; lFQsV: foreach ($full_tables as $table) { goto TrWzC; TTKgD: IV1k1: goto eFwkv; TrWzC: if ($this->db->table_exists($table)) { goto LqmJh; } goto qCZEy; qCZEy: $create_tables[$table] = $json[$table]; goto ZTK7y; sfsek: foreach ($json[$table] as $jtbl) { goto zZWa7; D6lB6: d5yQg: goto xdVbn; zZWa7: if ($this->db->field_exists($jtbl->name, $table)) { goto d5yQg; } goto bYx90; xdVbn: foreach ($fields[$table] as $ftbl) { goto xKBVJ; OhAdB: nuaJ1: goto tt1iD; Jy6dJ: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto fzq8N; } goto KWr28; xKBVJ: if (!($jtbl->name == $ftbl->name)) { goto anZFY; } goto Jy6dJ; KWr28: $edit_columns[$table][] = $jtbl; goto HV3nb; HV3nb: fzq8N: goto W8Quw; W8Quw: anZFY: goto OhAdB; tt1iD: } goto AS4Wp; oW1r2: a1YVI: goto GhOCC; bYx90: $add_columns[$table][] = $jtbl; goto LC8xP; GhOCC: zgFcp: goto KCFTP; AS4Wp: dgPqY: goto oW1r2; LC8xP: goto a1YVI; goto D6lB6; KCFTP: } goto w_twB; gxd_c: if (!isset($json[$table])) { goto IV1k1; } goto sfsek; eFwkv: QWsgT: goto GEP3z; ZTK7y: goto QWsgT; goto Tloge; GEP3z: HLpoC: goto J3PUy; Tloge: LqmJh: goto gxd_c; w_twB: eg_3c: goto TTKgD; J3PUy: } goto WLDJj; Jmvji: $tabless = $this->db->list_tables(); goto nU3H0; gEZ4L: TRCw6: goto yDLEH; iK7aE: $data = ["\144\x62" => $fields, "\x63\162\145\141\164\145" => $create_tables, "\155\x6f\144\151\146\171" => $edit_columns, "\141\x64\x64" => $add_columns, "\143\x6f\x75\x6e\x74\163" => $counts, "\x6a\163\x6f\x6e" => $json, "\x63\165\162\x72\x65\x6e\x74" => $currentDb]; goto RtnQX; nU3H0: $fields = []; goto WHoKv; wL1eM: $json = (array) $json; goto pGXvs; oX4bh: sort($full_tables); goto pWqfi; WHoKv: $currentDb = []; goto dtf7S; amsMo: $add_columns = []; goto GHARP; dtf7S: foreach ($tabless as $table) { goto oPQTa; LcDom: $retval[$i]->extra = $query[$i]->extra; goto uMdyv; JbAP0: if (!(($query = $this->db->query($sql)) === FALSE)) { goto g1pAF; } goto vUjaj; g2kwj: $datafld[$i]->auto_increment = true; goto ZpuF9; rqSVY: $c = count($query); goto fGFVc; fGFVc: jCD0K: goto meIia; SWbGa: ABsBL: goto EHZwo; sdnxp: z71ys: goto h07h9; meIia: if (!($i < $c)) { goto z71ys; } goto VdF2H; WQkMe: $retval[$i]->name = $query[$i]->column_name; goto LcDom; UvG02: $i++; goto ClvHx; ghSd9: e9f37: goto FN4op; EHZwo: yiORB: goto EEQHW; vUjaj: $currentDb = FALSE; goto UBdun; YAMEJ: $fields[$table] = $datafld; goto ghSd9; VdF2H: if (!($datafld[$i]->name == $query[$i]->column_name)) { goto yiORB; } goto DrKAb; uSRf2: goto XXTCo; goto n1zv7; UBdun: g1pAF: goto cAtK7; lVC92: $datafld[$i]->extra = $query[$i]->extra; goto uSRf2; cAtK7: $query = $query->result_object(); goto cGv_L; cGv_L: $retval = array(); goto MR37F; n1zv7: DW1v2: goto g2kwj; ZpuF9: XXTCo: goto SWbGa; ClvHx: goto jCD0K; goto sdnxp; Q9qJR: $sql = "\123\x45\x4c\105\103\x54\x20\140\x63\157\154\165\x6d\x6e\137\156\141\155\145\x60\x2c\x20\140\156\x75\x6d\145\162\x69\143\137\x70\162\145\x63\x69\x73\151\x6f\x6e\140\54\40\140\145\x78\164\162\141\x60\54\40\x60\x69\163\137\156\x75\154\x6c\141\142\x6c\145\140" . "\40\x46\122\117\x4d\40\140\x69\x6e\x66\157\x72\x6d\x61\164\x69\157\x6e\x5f\x73\143\150\145\155\141\x60\56\140\x63\x6f\154\165\x6d\x6e\163\140\x20\x57\110\105\x52\x45\x20\x74\141\142\x6c\x65\137\x73\x63\150\x65\155\141\40\75\x20\42" . $this->db->database . "\42\x20\101\116\104\x20\164\x61\142\154\x65\137\156\141\155\145\40\75\40\42" . $table . "\42"; goto JbAP0; uMdyv: UXw2X: goto UvG02; oPQTa: $datafld = $this->db->field_data($table); goto Q9qJR; Hz8UZ: if ($query[$i]->extra == "\141\x75\x74\x6f\137\151\x6e\143\162\145\x6d\x65\x6e\x74") { goto DW1v2; } goto lVC92; DrKAb: if (!($query[$i]->extra != '')) { goto ABsBL; } goto Hz8UZ; MR37F: $i = 0; goto rqSVY; h07h9: $currentDb[$table] = $retval; goto YAMEJ; EEQHW: $retval[$i] = new stdClass(); goto WQkMe; FN4op: } goto gEZ4L; pGXvs: $tbl_baru = array_keys($json); goto cW_9x; XJKKq: $full_tables = array_unique($full_tables); goto oX4bh; RtnQX: $this->output_json($data); goto u07EI; pWqfi: $create_tables = []; goto amsMo; vi3aU: $counts = count($create_tables) + count($add_columns) + count($edit_columns); goto iK7aE; C9UCn: $full_tables = array_merge($tbl_baru, $tbl_ada); goto XJKKq; u07EI: } public function updateDatabase() { goto lZI67; lZI67: $tabless = $this->db->list_tables(); goto tEokq; kjGgJ: $full_tables = array_merge($tbl_baru, $tbl_ada); goto FEqGj; Smo8P: $json = json_decode($json); goto Fb14L; Ao3QG: xTKwe: goto SNxXH; FEqGj: $full_tables = array_unique($full_tables); goto XkaNo; FarCA: oOSwI: goto YJmLE; tEokq: $fields = []; goto a1T8L; YJmLE: echo true; goto JnLs0; XkaNo: sort($full_tables); goto voPQI; Fb14L: $json = (array) $json; goto UEiOJ; voPQI: foreach ($full_tables as $table) { goto gSeGp; ExtJ0: Mslls: goto EE6Sk; bpaVb: if (!isset($json[$table])) { goto ERRDM; } goto v3IO5; L28Tf: LMsCe: goto Zdbs7; R1kcu: ERRDM: goto ExtJ0; mCpva: goto Mslls; goto Qvpit; v3IO5: foreach ($json[$table] as $jtbl) { goto jUzCD; jUzCD: if ($this->db->field_exists($jtbl->name, $table)) { goto ERYu1; } goto mD6El; VryOG: BRO0z: goto BRsB0; BRsB0: lC7Ua: goto P_9Tg; g1o0f: $field = array($jtbl->name => array("\x74\171\160\x65" => $jtbl->type, "\x63\x6f\x6e\163\x74\162\x61\151\156\x74" => $jtbl->max_length, "\x6e\165\154\154" => false)); goto TKIuJ; Ks8jm: foreach ($fields[$table] as $ftbl) { goto PAIC0; KF_HI: if ($jtbl->auto_increment == true) { goto Etk1B; } goto B86FC; vDgBW: aK1L8: goto j49a2; sc3n6: bCGrH: goto VBE52; yT9yd: gX2SA: goto sc3n6; MxTk8: if ($jtbl->default == "\103\125\x52\x52\105\x4e\124\x5f\x54\111\x4d\x45\123\x54\x41\x4d\120") { goto Pq4Hq; } goto Rt5Xm; f7z87: Pq4Hq: goto lnZKj; Bbwr5: wdWMW: goto MxTk8; BRfy5: goto r5ttx; goto MtfDC; ezzL3: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto bOum1; } goto oXKvt; k94K6: $this->dbforge->add_key($jtbl->name, true); goto nh_FV; B86FC: $field = array($jtbl->name => array("\x74\x79\x70\145" => $jtbl->type, "\x63\157\156\x73\x74\162\141\151\x6e\164" => $jtbl->max_length, "\156\165\154\154" => false)); goto BRfy5; MhA4_: $field = array($jtbl->name . "\x20\144\x61\164\x65\164\151\155\145\40\x64\145\146\141\165\154\x74\40\143\165\162\x72\145\156\x74\137\x74\151\x6d\145\x73\164\141\155\160" . $onUpdate); goto vDgBW; j49a2: $this->dbforge->modify_column($table, $field); goto shwEp; shwEp: zH8Sf: goto RjpGi; nh_FV: $this->dbforge->modify_column($table, $field); goto Cu1K4; PAIC0: if (!($jtbl->name == $ftbl->name)) { goto gX2SA; } goto ezzL3; MtfDC: Etk1B: goto mRmbR; lnZKj: $onUpdate = isset($jtbl->extra) ? "\40" . strtolower($jtbl->extra) : ''; goto MhA4_; RjpGi: bOum1: goto yT9yd; vkwLk: r5ttx: goto k94K6; Rt5Xm: $field = array($jtbl->name => array("\x74\171\160\145" => $jtbl->type, "\x63\x6f\x6e\163\164\x72\141\x69\x6e\164" => $jtbl->max_length, "\x64\145\x66\x61\165\x6c\164" => $jtbl->default)); goto skzU7; Cu1K4: goto zH8Sf; goto Bbwr5; skzU7: goto aK1L8; goto f7z87; mRmbR: $field = array($jtbl->name => array("\164\x79\x70\145" => $jtbl->type, "\x63\x6f\x6e\x73\164\162\x61\x69\156\164" => $jtbl->max_length, "\x6e\165\154\154" => false, "\x61\x75\x74\x6f\x5f\x69\x6e\143\162\145\x6d\x65\156\164" => true)); goto vkwLk; oXKvt: if ($jtbl->primary_key == 0) { goto wdWMW; } goto KF_HI; VBE52: } goto VryOG; wL_aB: sbmLU: goto wRE1J; sPbv9: $field = array($jtbl->name => array("\x74\171\x70\145" => $jtbl->type, "\143\x6f\156\x73\164\162\141\x69\156\164" => $jtbl->max_length, "\x64\x65\x66\x61\165\154\x74" => $jtbl->default)); goto SDr3t; mD6El: if ($jtbl->primary_key == 0) { goto vrGNQ; } goto g1o0f; SDr3t: $this->dbforge->add_column($table, $field); goto wL_aB; TKIuJ: $this->dbforge->add_key($jtbl->name, true); goto wgOVK; wRE1J: goto lC7Ua; goto f11Kv; f11Kv: ERYu1: goto Ks8jm; wgOVK: $this->dbforge->add_column($table, $field); goto jwJxI; NOEdu: vrGNQ: goto sPbv9; P_9Tg: S6RrW: goto YxtWA; jwJxI: goto sbmLU; goto NOEdu; YxtWA: } goto jk1yl; gSeGp: if ($this->db->table_exists($table)) { goto rE3A1; } goto JTfXj; jk1yl: eUaeW: goto R1kcu; EE6Sk: uzlXH: goto L6fOl; JTfXj: if (!isset($json[$table])) { goto yHBn5; } goto Zsn6g; WzsnP: yHBn5: goto mCpva; frmo5: $this->db->query("\x41\114\x54\x45\122\40\x54\101\x42\114\105\x20\x20\x60" . $table . "\140\40\105\116\x47\x49\x4e\x45\x20\75\x20\111\156\156\157\104\102"); goto WzsnP; Zdbs7: $this->dbforge->create_table($table, TRUE); goto frmo5; Zsn6g: foreach ($json[$table] as $tbl => $jtbl) { goto mNQF6; rBGfn: Y04I9: goto TnSgH; mNQF6: $field = [$jtbl->name => ["\x74\x79\160\145" => $jtbl->type, "\143\x6f\x6e\x73\x74\x72\x61\x69\x6e\x74" => $jtbl->max_length, "\x6e\x75\154\x6c" => $jtbl->primary_key == 0]]; goto YkGr0; Ej7bb: if (!($jtbl->primary_key == 1)) { goto Y04I9; } goto uUxBM; TnSgH: gS4zK: goto DLcxK; uUxBM: $this->dbforge->add_key($jtbl->name, true); goto rBGfn; YkGr0: $this->dbforge->add_field($field); goto Ej7bb; DLcxK: } goto L28Tf; Qvpit: rE3A1: goto bpaVb; L6fOl: } goto FarCA; UEiOJ: $tbl_baru = array_keys($json); goto dAhtl; SNxXH: $json = file_get_contents("\x2e\x2f\141\163\163\145\x74\x73\x2f\x61\160\x70\x2f\144\142\57\144\x61\x74\141\142\141\163\x65\56\x6a\x73\x6f\156"); goto Smo8P; dAhtl: $tbl_ada = array_keys($fields); goto kjGgJ; a1T8L: foreach ($tabless as $table) { $fields[$table] = $this->db->field_data($table); qr2h3: } goto Ao3QG; JnLs0: } public function checkDb() { goto PbzxW; d9x6p: $create_tables = []; goto wSorR; PbzxW: $db_debug = $this->db->db_debug; goto ys_Rt; PQsWX: nlbvs: goto g1pLE; I4FFX: $fields = []; goto O4Jwz; YbeCm: $tabless = $this->db->list_tables(); goto I4FFX; pzNoG: $full_tables = array_merge($tbl_seharusnya, $tbl_ada); goto NqQY1; l4oiB: $tbl_ada = array_keys($fields); goto pzNoG; O4Jwz: foreach ($tabless as $table) { goto znfmS; iAmot: if (!($i < $c)) { goto zdmql; } goto k1iYT; cMN3Z: $retval = array(); goto O_lsx; K5L6E: $retval[$i]->primary = $query[$i]->column_key; goto utw7W; utw7W: IJIrA: goto hDOy4; TjPbe: goto lijKy; goto t7XXB; znfmS: $sql = "\x53\x45\114\105\103\x54\40\140\143\x6f\x6c\x75\x6d\156\137\x6e\141\155\145\x60\x2c\x20\140\x63\x6f\x6c\165\155\x6e\137\164\171\160\x65\140\54\40\x60\143\x6f\x6c\154\141\164\x69\157\x6e\x5f\x6e\141\x6d\x65\x60\54\x20\x60\x64\x61\x74\x61\137\164\171\160\x65\x60\54\40\140\143\150\x61\x72\x61\x63\x74\145\x72\137\x6d\141\x78\x69\x6d\165\155\x5f\154\145\x6e\147\x74\x68\140\54\40\140\x6e\x75\x6d\x65\x72\151\x63\137\x70\162\x65\143\151\163\151\157\156\x60\x2c" . "\x20\140\x63\157\x6c\x75\155\156\x5f\144\145\x66\141\165\154\164\x60\x2c\40\x60\x63\157\154\x75\x6d\x6e\x5f\153\145\x79\140\54\x20\x60\143\x6f\154\x75\x6d\x6e\137\143\x6f\155\155\145\x6e\164\140\54\40\140\145\x78\x74\x72\x61\x60\54\40\x60\151\163\x5f\x6e\x75\x6c\154\x61\x62\154\145\x60\15\12\11\x9\x9\106\x52\x4f\115\40\140\x69\156\146\x6f\x72\x6d\141\x74\x69\157\156\x5f\163\143\150\x65\x6d\x61\x60\56\140\143\x6f\x6c\x75\155\x6e\163\140\40\x57\x48\x45\122\x45\x20\164\x61\x62\154\145\137\163\x63\150\x65\x6d\x61\40\x3d\x20\x22" . $this->db->database . "\42\x20\101\x4e\x44\x20\x74\x61\x62\154\x65\x5f\x6e\x61\x6d\145\40\x3d\40\42" . $table . "\x22"; goto TBCOc; obl3I: g1IJa: goto JDyM3; t1Aub: $retval[$i]->collation = $query[$i]->collation_name; goto Jqn7Q; TBCOc: if (!(($query = $this->db->query($sql)) === FALSE)) { goto loTht; } goto YmTYY; TeZK3: $retval[$i]->type = $query[$i]->data_type; goto t1Aub; KS4SI: $retval[$i]->default = $query[$i]->column_default; goto Sj70S; iCTmU: $retval[$i]->nullable = $query[$i]->is_nullable; goto K5L6E; PS7up: $query = $query->result_object(); goto cMN3Z; VknVy: $retval[$i]->extra = $query[$i]->extra; goto iCTmU; Jqn7Q: $retval[$i]->max_length = $query[$i]->character_maximum_length > 0 ? $query[$i]->character_maximum_length : $query[$i]->numeric_precision; goto KS4SI; Sj70S: $retval[$i]->comment = $query[$i]->column_comment; goto VknVy; lIsLg: $c = count($query); goto fWoM0; fWoM0: lijKy: goto iAmot; iEMKS: loTht: goto PS7up; YmTYY: $fields = FALSE; goto iEMKS; k1iYT: $retval[$i] = new stdClass(); goto eb6c8; ylSWf: $retval[$i]->col_type = $query[$i]->column_type; goto TeZK3; eb6c8: $retval[$i]->name = $query[$i]->column_name; goto ylSWf; hDOy4: $i++; goto TjPbe; O8SJt: $fields[$table] = (object) ["\164\x61\x62\154\x65\137\156\x61\155\x65" => $table, "\x63\157\154\x75\155\156\163" => $retval]; goto obl3I; O_lsx: $i = 0; goto lIsLg; t7XXB: zdmql: goto O8SJt; JDyM3: } goto DnfKW; RL58g: $json = (array) $json; goto AqzqG; AqzqG: $tbl_seharusnya = array_keys($json); goto l4oiB; QYq6y: foreach ($full_tables as $table) { goto wZSby; UDt30: foreach ($json[$table]->columns as $jtbl) { goto qb4M2; DDuwQ: gfY9Z: goto DFYOH; k1n7A: qj17q: goto YUIx_; yUWJx: $extra = $jtbl->extra == '' ? '' : "\x20" . strtoupper($jtbl->extra); goto rNpAm; YKdJq: $comment = $jtbl->comment == '' ? '' : "\x20\x43\x4f\115\x4d\x45\116\124\40\x27" . $jtbl->comment . "\x27"; goto Ducgz; BfzWS: TPeYp: goto cthBf; yOLFN: goto gfY9Z; goto BYKc7; cthBf: W22eI: goto tv1Rh; BgOPm: goto gCjt2; goto k1n7A; e3kSp: pNv1D: goto YKdJq; O0NYe: agAgC: goto wgPdI; rNpAm: if (!(strtoupper($extra) == "\x20\x41\x55\x54\117\137\111\x4e\x43\x52\105\115\x45\116\124")) { goto pNv1D; } goto bTW2R; eNSuW: $length = "\50" . $jtbl->max_length . "\51"; goto yOLFN; k2Rb5: $length = "\x28" . ($jtbl->max_length + 1) . "\51"; goto DDuwQ; YUIx_: if ($jtbl->type == "\151\156\x74") { goto ddpEj; } goto eNSuW; DFYOH: gCjt2: goto AaMEv; sq0WZ: $default = $jtbl->default == null ? '' : "\40\x44\x45\106\x41\x55\114\124\40" . $jtbl->default; goto yUWJx; BYKc7: ddpEj: goto k2Rb5; toX2G: $length = ''; goto fOiFO; EjGsm: IHBuU: goto zdlXA; rC9h4: if ($jtbl->type != "\154\x6f\x6e\147\164\x65\x78\x74" && $jtbl->type != "\155\145\144\x69\x75\155\x74\145\170\x74" && $jtbl->type != "\164\x65\x78\x74") { goto qj17q; } goto toX2G; bTW2R: $extra .= "\x20\120\122\x49\115\101\122\x59\40\x4b\x45\x59"; goto e3kSp; zdlXA: foreach ($fields[$table]->columns as $ftbl) { goto Gv2QP; k6lSs: $ftbl->default = strtoupper($ftbl->default); goto n9RSx; FXsv7: $default = $jtbl->default == null ? '' : "\x20\x44\105\x46\101\125\x4c\x54\40" . $jtbl->default; goto N8b09; svtYX: hD_4x: goto OP9SV; H7WDh: FtCuP: goto zuHTO; lajQo: if (!($jtbl->default != $ftbl->default)) { goto aKTkl; } goto iWNo_; gnDE2: $ftbl->extra = strtoupper($ftbl->extra); goto It3KN; MNPJ0: $ftbl->default = str_replace("\x28\x29", '', $ftbl->default); goto k6lSs; yuCp9: $edit_columns[$table][$jtbl->name]["\x65\170\x74\x72\x61"] = $jtbl->extra; goto dEpEn; viUZB: $edit_columns[$table][$jtbl->name]["\160\x72\x69\155\141\x72\171"] = $jtbl->primary; goto AotbV; WT61J: if (!($jtbl->nullable != $ftbl->nullable)) { goto VyZbj; } goto beSiT; HXep8: array_push($modif_column, "\x41\104\104\x20\x55\x4e\111\x51\x55\105\40\113\x45\131\40\140" . $jtbl->name . "\140\x20\x28\140" . $jtbl->name . "\x60\51"); goto aCFTO; J0o9Y: Em5j2: goto azB6s; of9m9: if (strtolower($jtbl->primary) == "\x75\x6e\151") { goto jBkP8; } goto o_xWq; MnLq9: VyZbj: goto BGw68; Gv2QP: if (!($jtbl->name == $ftbl->name)) { goto qT1ZC; } goto enmv5; aCFTO: ONZT6: goto AqzXE; kf0GD: c9Yp0: goto tcc_1; AotbV: if (strtolower($jtbl->primary) == "\x70\x72\151") { goto FtCuP; } goto of9m9; fOh6l: $jtbl->default = strtoupper($jtbl->default); goto kf0GD; enmv5: if (!($jtbl->col_type != $ftbl->col_type)) { goto U00vu; } goto HWZ6d; FVnh2: $jtbl->extra = str_replace("\50\51", '', $jtbl->extra); goto IUYHW; QgV6H: array_push($modif_column, "\115\x4f\x44\x49\106\131\40\x60" . $jtbl->name . "\x60\x20" . $jtbl->col_type . $nullable . $default . $extra . $comment); goto svtYX; Vyuqf: $edit_columns[$table][$jtbl->name]["\143\157\155\155\145\156\164"] = $jtbl->comment; goto J0o9Y; IUYHW: $jtbl->extra = strtoupper($jtbl->extra); goto TxbXe; azB6s: if (!($jtbl->primary != $ftbl->primary)) { goto bqqXY; } goto viUZB; q3WOy: goto ONZT6; goto BdTpr; VeYUl: $comment = $jtbl->comment == '' ? '' : "\x20\103\x4f\x4d\115\x45\116\x54\40\x27" . $jtbl->comment . "\47"; goto QgV6H; hWRkm: $jtbl->default = str_replace("\x28\51", '', $jtbl->default); goto fOh6l; iKVzO: if (!($jtbl->comment != $ftbl->comment)) { goto Em5j2; } goto Vyuqf; LBM3x: $nullable = $jtbl->nullable == "\x4e\x4f" ? "\40\116\117\x54\x20\x4e\125\114\114" : ''; goto FXsv7; oOtxt: if (!($jtbl->col_type != $ftbl->col_type || $jtbl->nullable != $ftbl->nullable || $jtbl->default != $ftbl->default || $jtbl->extra != $ftbl->extra || $jtbl->comment != $ftbl->comment)) { goto hD_4x; } goto LBM3x; n9RSx: UdvZZ: goto lajQo; a_jrp: $ftbl->extra = str_replace("\50\51", '', $ftbl->extra); goto gnDE2; CpyuF: aKTkl: goto cYhSe; XwH2P: W8JBv: goto s1Iv3; Vl_eC: if (!($jtbl->extra != $ftbl->extra)) { goto ARAMD; } goto yuCp9; tcc_1: if (!($ftbl->default != null)) { goto UdvZZ; } goto MNPJ0; beSiT: $edit_columns[$table][$jtbl->name]["\156\165\154\154\x61\142\154\x65"] = $jtbl->nullable; goto MnLq9; iWNo_: $edit_columns[$table][$jtbl->name]["\144\145\x66\x61\x75\154\x74"] = $jtbl->default; goto CpyuF; VZHUp: U00vu: goto WT61J; BdTpr: jBkP8: goto HXep8; AqzXE: bqqXY: goto oOtxt; cYhSe: if (!($jtbl->extra != null)) { goto VtrwV; } goto FVnh2; zuHTO: array_push($modif_column, "\x41\x44\104\40\x50\x52\x49\x4d\101\x52\x59\40\113\105\x59\x20\50\140" . $jtbl->name . "\140\51"); goto q3WOy; BGw68: if (!($jtbl->default != null)) { goto c9Yp0; } goto hWRkm; dEpEn: ARAMD: goto iKVzO; It3KN: rCyfy: goto Vl_eC; HWZ6d: $edit_columns[$table][$jtbl->name]["\143\157\154\137\164\x79\x70\145"] = $jtbl->col_type; goto VZHUp; S8Q7k: if (!($ftbl->extra != null)) { goto rCyfy; } goto a_jrp; o_xWq: goto ONZT6; goto H7WDh; TxbXe: VtrwV: goto S8Q7k; N8b09: $extra = $jtbl->extra == '' ? '' : "\40" . strtoupper($jtbl->extra); goto VeYUl; OP9SV: qT1ZC: goto XwH2P; s1Iv3: } goto BfzWS; BLVqi: if ($jtbl->max_length == null) { goto agAgC; } goto rC9h4; Ducgz: array_push($add_column, "\x41\104\x44\40\x60" . $jtbl->name . "\x60\x20" . $jtbl->type . $length . $nullable . $default . $extra . $comment); goto EjGsm; qb4M2: if ($this->db->field_exists($jtbl->name, $table)) { goto IHBuU; } goto lagtx; AaMEv: $nullable = $jtbl->nullable == "\x4e\117" ? "\40\x4e\x4f\124\x20\x4e\x55\114\x4c" : ''; goto sq0WZ; lagtx: $add_columns[$table][] = $jtbl; goto BLVqi; wgPdI: $length = ''; goto BgOPm; fOiFO: goto gCjt2; goto O0NYe; tv1Rh: } goto lWita; Kdl6Q: if (!isset($json[$table])) { goto A9Jje; } goto F8ave; KthUk: goto N_vmv; goto k1VTX; cof1k: if (!(count($add_column) > 0)) { goto uY5jz; } goto ORMF9; Qrnbo: $modif_column = []; goto UDt30; Hi8iy: uY5jz: goto eJkP6; PADAr: $script_edit_column[$table] = "\101\x4c\x54\x45\122\x20\124\x41\x42\114\x45\x20\x60" . $table . "\x60\x20" . implode("\x2c\x20", $modif_column) . "\73"; goto dO7aG; OTry3: $script = "\x43\122\105\101\124\x45\40\124\101\x42\114\x45\40\140" . $table . "\x60\40\50"; goto KFiLT; RFHUz: $script .= $pri . "\x29\x20\x45\116\107\111\x4e\105\75\111\x6e\156\157\104\x42\x20\x44\x45\106\x41\125\x4c\x54\x20\103\x48\101\x52\123\105\x54\x3d\x75\x74\146\70\x6d\x62\x34\x3b"; goto IP2gW; CO4JJ: A9Jje: goto KthUk; wZSby: if (!$this->db->table_exists($table)) { goto yWfrJ; } goto Kdl6Q; PJPq5: N_vmv: goto cVICm; F8ave: $add_column = []; goto Qrnbo; lWita: FPB3C: goto cof1k; cVICm: imRGg: goto WJod7; eJkP6: if (!(count($modif_column) > 0)) { goto Z5elu; } goto PADAr; KFiLT: $pri = ''; goto TYwyj; k1VTX: yWfrJ: goto QnUkx; QnUkx: $create_tables[] = $json[$table]; goto OTry3; TYwyj: foreach ($json[$table]->columns as $column) { goto LWO0p; phDz2: $length = "\50" . $column->max_length . "\51"; goto WhT08; YJOOg: $default = $column->default == null ? '' : "\x20\104\x45\106\101\x55\x4c\x54\40" . $column->default; goto MOnTL; TJ20Z: if ($column->type != "\x6c\x6f\x6e\x67\164\145\x78\164" && $column->type != "\155\x65\x64\x69\165\155\164\x65\x78\x74" && $column->type != "\164\x65\170\164") { goto gRMch; } goto JSb30; MOnTL: $extra = $column->extra == '' ? '' : "\x20" . strtoupper($column->extra); goto L1Hs_; hydmx: uDi8d: goto NjoZN; BuDdl: $pri .= $column->primary != '' ? "\120\122\x49\115\101\x52\131\40\113\x45\131\40\x28\x60" . $column->name . "\140\x29" : ''; goto zRQlX; fjldS: goto uDi8d; goto CWQqq; W3NzS: goto uDi8d; goto S3cGU; LWO0p: if ($column->max_length == null) { goto kYGD7; } goto TJ20Z; S3cGU: kYGD7: goto liMcM; NjoZN: $nullable = $column->nullable == "\116\x4f" ? "\x20\116\117\124\40\116\x55\114\x4c" : ''; goto YJOOg; CWQqq: gRMch: goto Kh3Ni; iV4Gy: bxJ2r: goto hydmx; WhT08: goto bxJ2r; goto ge78n; L1Hs_: $comment = $column->comment == '' ? '' : "\40\x43\x4f\x4d\x4d\105\116\124\x20\x27" . $column->comment . "\x27"; goto Zkq46; JSb30: $length = ''; goto W3NzS; liMcM: $length = ''; goto fjldS; Kh3Ni: if ($column->type == "\x69\156\164") { goto lX2Yo; } goto phDz2; HnUfu: $length = "\50" . ($column->max_length + 1) . "\x29"; goto iV4Gy; Zkq46: $script .= "\140" . $column->name . "\140\x20" . $column->type . $length . $nullable . $default . $extra . $comment . "\54\x20"; goto BuDdl; zRQlX: wkS51: goto YunXI; ge78n: lX2Yo: goto HnUfu; YunXI: } goto PnMsn; ORMF9: $script_create_column[$table] = "\101\x4c\124\x45\122\x20\124\x41\102\114\x45\40\x60" . $table . "\x60\40" . implode("\54\40", $add_column) . "\73"; goto Hi8iy; PnMsn: LOPqZ: goto RFHUz; dO7aG: Z5elu: goto CO4JJ; IP2gW: $script_create_table[$table] = $script; goto PJPq5; WJod7: } goto PQsWX; fJi2n: $json = file_get_contents("\56\57\141\x73\x73\145\164\x73\x2f\141\160\x70\x2f\144\x62\57\144\141\x74\141\142\x61\x73\x65\56\x6a\x73\x6f\156"); goto t066t; VOckP: $data = ["\x66\151\x65\154\144\163" => $fields, "\143\162\145\x61\x74\x65\x5f\x74\141\x62\154\145\x73" => $create_tables, "\143\157\x75\156\x74\x5f\164\x62\x6c" => count($create_tables), "\141\x64\144\x5f\143\x6f\x6c\x75\x6d\156\163\137\164\x6f\137\x74\141\142\154\x65" => $add_columns, "\x63\157\165\x6e\x74\137\143\x6f\154" => count($add_columns), "\145\x64\x69\164\137\x63\157\x6c\x75\155\x6e\x73" => $edit_columns, "\x63\x6f\x75\x6e\x74\137\155\157\144" => count($edit_columns), "\x61\x64\x64\x5f\164\x62\154" => $this->encryption->encrypt(json_encode($script_create_table)), "\141\144\x64\137\143\x6f\154" => $this->encryption->encrypt(json_encode($script_create_column)), "\155\157\x64\x5f\x63\x6f\x6c" => $this->encryption->encrypt(json_encode($script_edit_column))]; goto mBc1H; mBc1H: $this->output_json($data); goto sbwYk; t066t: $json = json_decode($json); goto RL58g; DjZXG: $add_columns = []; goto KWEPy; NqQY1: $full_tables = array_unique($full_tables); goto CZfY9; Wowq6: $script_edit_column = []; goto QYq6y; wSorR: $script_create_table = []; goto DjZXG; CZfY9: sort($full_tables); goto d9x6p; WgDu8: $edit_columns = []; goto Wowq6; g1pLE: $this->db->db_debug = $db_debug; goto VOckP; DnfKW: F_35a: goto fJi2n; ys_Rt: $this->db->db_debug = FALSE; goto YbeCm; KWEPy: $script_create_column = []; goto WgDu8; sbwYk: } public function createTable() { goto iKw_S; eBMm1: foreach ($scripts as $script) { $queries .= $script; wr0Rz: } goto Wguq0; Wguq0: jfZgp: goto AJM1P; AJM1P: $data["\163\165\143\143\x65\x73\x73"] = $this->runQuery($queries); goto WaBVr; uEyMn: $queries = ''; goto eBMm1; VmM0I: str_replace("\x25\62\x42", "\53", $scripts); goto qvy9x; qvy9x: sleep(1); goto Spmqz; Spmqz: $scripts = json_decode($this->encryption->decrypt($scripts)); goto uEyMn; GOcgj: $this->output_json($data); goto JRVt2; iKw_S: $scripts = $this->input->post("\144\x61\x74\141", true); goto VmM0I; WaBVr: $data["\155\x65\x73\163\x61\147\x65"] = "\x55\x70\144\141\x74\x65\x20\153\x6f\154\x6f\x6d"; goto GOcgj; JRVt2: } public function createColumn() { goto REIMb; ac71P: $scripts = json_decode($this->encryption->decrypt($scripts)); goto FOEGO; moY3k: nXqM7: goto GzULb; GzULb: $data["\x73\165\143\143\x65\x73\x73"] = $this->runQuery($queries); goto o9T9z; njSQ7: sleep(1); goto ac71P; REIMb: $scripts = $this->input->post("\144\141\x74\141", true); goto hmPqT; xf93N: if (!(strpos("\x60\x75\151\x64\140", $queries) !== false)) { goto nXqM7; } goto teagd; hmPqT: str_replace("\x25\x32\102", "\53", $scripts); goto njSQ7; NcOat: $this->output_json($data); goto dYnqQ; o9T9z: $data["\x6d\x65\163\163\x61\x67\145"] = "\115\157\x64\x69\146\x79\40\x6b\157\x6c\x6f\x6d"; goto NcOat; NLkIZ: RvByR: goto xf93N; FOEGO: $queries = ''; goto UVrpL; teagd: $this->updateUID(); goto moY3k; UVrpL: foreach ($scripts as $script) { $queries .= $script; KPEfY: } goto NLkIZ; dYnqQ: } public function editColumn() { goto X1Zf6; v81XL: foreach ($scripts as $script) { $queries .= $script; BmoRL: } goto yuj1i; iGLeZ: $this->output_json($data); goto TQfbB; oXMmz: $data["\x73\165\143\x63\x65\163\163"] = $this->runQuery($queries); goto Rh3O7; dLU9S: $queries = ''; goto v81XL; Rh3O7: $data["\x6d\145\163\163\x61\147\x65"] = "\125\x70\144\141\x74\x65\x20\x73\x65\x6c\145\x73\x61\x69"; goto iGLeZ; Cu0rY: $scripts = json_decode($this->encryption->decrypt($scripts)); goto dLU9S; yuj1i: pSXwd: goto oXMmz; YjdsS: sleep(1); goto Cu0rY; QNioV: str_replace("\x25\x32\102", "\x2b", $scripts); goto YjdsS; X1Zf6: $scripts = $this->input->post("\144\x61\x74\141", true); goto QNioV; TQfbB: } function runQuery($script) { goto HV7DS; HV7DS: $hostname = $this->db->hostname; goto H8Sn6; Af5we: $database = $this->db->database; goto wCF7x; jdVEZ: t3tJB: goto jZS6j; apXi9: $hostpass = $this->db->password; goto Af5we; B4Uck: if (!mysqli_connect_errno()) { goto t3tJB; } goto Me7g2; Me7g2: return mysqli_connect_errno(); goto jdVEZ; H8Sn6: $hostuser = $this->db->username; goto apXi9; AOq7T: $mysqli->close(); goto fDwZ4; fDwZ4: return true; goto tq08s; jZS6j: $mysqli->multi_query($script); goto AOq7T; wCF7x: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto B4Uck; tq08s: } function updateUID() { goto b812s; p8OyG: return $this->db->update_batch("\x6d\141\x73\164\x65\x72\137\x73\x69\163\167\x61", $input, "\151\144\x5f\163\x69\x73\x77\141"); goto jI9w6; C3gLV: foreach ($siswas as $siswa) { $input[] = array("\151\144\x5f\163\x69\163\x77\x61" => $siswa->id_siswa, "\x75\x69\144" => $this->uuid->v4()); yHzka: } goto y1YHH; y1YHH: IyHJV: goto p8OyG; cbuO7: $input = array(); goto C3gLV; YZmYS: $siswas = $this->db->get("\155\141\163\x74\x65\162\x5f\x73\151\x73\167\141")->result(); goto cbuO7; b812s: $this->load->library("\125\165\151\x64", "\x75\165\151\144"); goto YZmYS; jI9w6: } function make_base() { } }
