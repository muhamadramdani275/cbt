<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\105\120\101\x54\110") or exit("\116\157\40\144\x69\162\145\x63\164\40\163\x63\162\x69\160\x74\x20\141\143\143\x65\x73\x73\40\141\154\x6c\157\167\x65\144"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; class Dataekstra extends CI_Controller { public function __construct() { goto X8Sax; yg3vL: $this->load->model("\104\162\157\160\x64\157\167\156\137\x6d\157\x64\145\154", "\144\162\157\x70\x64\x6f\x77\x6e"); goto F2hrN; BGdSa: $this->form_validation->set_error_delimiters('', ''); goto Hu9ko; k13i6: bhG83: goto q6a7K; u4HW2: $this->load->library(["\144\x61\x74\x61\x74\141\142\x6c\145\x73", "\146\157\162\x6d\x5f\x76\x61\154\x69\x64\x61\x74\151\x6f\x6e"]); goto Gu0cG; EWI7f: BVYgm: goto jw0qv; GktcZ: if (!$this->ion_auth->logged_in()) { goto BVYgm; } goto TEeAr; F2hrN: $this->load->model("\113\145\154\x61\163\137\155\x6f\144\145\154", "\153\x65\154\141\163"); goto BGdSa; X8Sax: parent::__construct(); goto GktcZ; si6Qw: show_error("\110\141\x6e\171\x61\40\101\144\x6d\x69\x6e\151\163\164\x72\141\164\x6f\x72\x20\171\141\x6e\x67\40\x64\x69\142\x65\162\x69\x20\150\x61\x6b\x20\x75\x6e\x74\x75\x6b\40\155\145\x6e\147\x61\153\163\x65\x73\x20\150\141\154\141\x6d\x61\156\x20\x69\156\151\x2c\40\x3c\x61\x20\x68\x72\x65\146\x3d\x22" . base_url("\144\141\x73\150\142\x6f\141\162\144") . "\42\76\x4b\145\155\142\x61\x6c\151\40\153\145\40\x6d\x65\156\x75\x20\x61\167\x61\x6c\x3c\57\x61\x3e", 403, "\101\153\x73\x65\x73\x20\124\145\x72\x6c\141\162\x61\x6e\147"); goto k13i6; kCq0Y: Ntbur: goto u4HW2; HT0jq: $this->load->model("\x44\x61\163\150\x62\157\x61\x72\x64\x5f\x6d\157\x64\145\154", "\144\x61\163\x68\142\x6f\141\162\x64"); goto yg3vL; jw0qv: redirect("\141\x75\164\150"); goto kCq0Y; Gu0cG: $this->load->model("\115\141\163\164\145\162\137\x6d\157\144\x65\x6c", "\x6d\x61\163\164\x65\x72"); goto HT0jq; q6a7K: goto Ntbur; goto EWI7f; TEeAr: if ($this->ion_auth->is_admin()) { goto bhG83; } goto si6Qw; Hu9ko: } public function output_json($data, $encode = true) { goto lrpx9; IIApZ: SDG3Z: goto NK9pb; NK9pb: $this->output->set_content_type("\x61\x70\x70\x6c\151\x63\141\x74\x69\x6f\156\57\x6a\x73\157\x6e")->set_output($data); goto zsj83; KHZJy: $data = json_encode($data); goto IIApZ; lrpx9: if (!$encode) { goto SDG3Z; } goto KHZJy; zsj83: } public function index() { goto HwD5T; lkwZ4: $data["\x74\160\x5f\141\x63\x74\x69\x76\145"] = $tp; goto jy1Xz; JoceK: $data = ["\x75\163\145\162" => $user, "\x6a\x75\x64\165\154" => "\x45\153\163\x74\162\141\153\165\x72\151\153\165\x6c\145\162", "\163\165\142\152\x75\x64\x75\x6c" => "\x44\x61\x74\x61\40\x4d\141\x74\141\x20\x50\x65\x6c\141\x6a\x61\x72\141\156", "\x70\x72\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto rKwco; jy1Xz: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto ydFw1; wX8D4: $this->load->view("\137\x74\145\x6d\x70\x6c\x61\164\x65\163\x2f\144\x61\x73\150\142\157\x61\x72\144\57\x5f\x68\145\x61\144\145\x72", $data); goto hTrXf; QxzlD: $data["\x6b\x65\x6c\141\x73"] = $kelas; goto DT2OK; JCu6D: $data["\145\x6b\x73\153\165\x6c"] = $this->dropdown->getAllEkskul(); goto AKRB9; EZ7VQ: fnds7: goto Y6Vqr; e5gTP: $kelasEks = []; goto QdoFK; ydFw1: $data["\x73\x6d\x74\137\141\143\x74\x69\x76\145"] = $smt; goto JCu6D; hTrXf: $this->load->view("\x6d\141\163\164\x65\x72\x2f\145\153\163\x74\x72\141\57\x64\141\x74\141"); goto F0O2X; AKRB9: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto e5gTP; QdoFK: foreach ($kelas as $key => $kls) { $kelasEks[$key] = $this->kelas->getKelasEkskul($key, $tp->id_tp, $smt->id_smt); o_sGf: } goto EZ7VQ; miyoq: $smt = $this->dashboard->getSemesterActive(); goto wCZvq; F0O2X: $this->load->view("\137\x74\145\x6d\x70\154\141\164\145\x73\x2f\x64\141\163\x68\x62\x6f\141\162\144\x2f\x5f\x66\x6f\157\x74\145\x72"); goto pxaQG; DT2OK: $data["\160\x65\x6d\142\151\155\x62\x69\x6e\147"] = $this->dropdown->getAllGuru(); goto wX8D4; rKwco: $tp = $this->dashboard->getTahunActive(); goto miyoq; wCZvq: $data["\164\160"] = $this->dashboard->getTahun(); goto lkwZ4; HwD5T: $user = $this->ion_auth->user()->row(); goto JoceK; Y6Vqr: $data["\145\153\163\153\165\154\x5f\x6b\145\154\x61\x73"] = $kelasEks; goto QxzlD; pxaQG: } public function create() { goto sZ5dL; IbVrY: $data = $this->master->create("\155\141\163\x74\145\162\x5f\145\153\163\164\x72\x61", $insert); goto m1yu_; sZ5dL: $insert = ["\156\141\x6d\x61\137\145\153\x73\164\x72\x61" => $this->input->post("\156\x61\155\141\x5f\x65\x6b\x73\x74\x72\x61", true), "\153\157\x64\145\x5f\145\x6b\163\164\x72\141" => $this->input->post("\153\157\144\x65\137\x65\153\x73\x74\162\141", true)]; goto IbVrY; m1yu_: $this->output->set_content_type("\141\160\160\154\151\x63\141\164\x69\x6f\156\x2f\152\x73\x6f\x6e")->set_output($data); goto i1rfp; i1rfp: } public function read() { goto U4OzE; YdfnY: echo $this->datatables->generate(); goto JfEBw; U4OzE: $this->datatables->select("\52"); goto HokSx; HokSx: $this->datatables->from("\155\x61\x73\x74\145\x72\x5f\x65\153\163\x74\x72\141"); goto YdfnY; JfEBw: } public function update() { $data = $this->master->updateEkstra(); $this->output->set_content_type("\141\x70\x70\x6c\x69\x63\141\164\151\157\x6e\x2f\x6a\x73\157\156")->set_output($data); } public function delete($id) { goto C_QmX; C_QmX: $messages = []; goto PIDYN; mjj4y: goto f4VL6; goto CbdFM; OQ7_L: foreach ($tabless as $table) { goto lAiHs; QrLm7: r8B37: goto K4JbY; lQ6Pa: foreach ($fields as $field) { goto NrGW3; NrGW3: if (!($field->name == "\151\144\x5f\x65\x6b\x73\164\x72\141" || $field->name == "\145\153\163\164\162\141\137\x69\x64")) { goto eBFoE; } goto yXcv7; yXcv7: array_push($tables, $table); goto zxjqd; zxjqd: eBFoE: goto mJicf; mJicf: z1ksA: goto zs8q9; zs8q9: } goto OxL2i; OxL2i: oPfJu: goto QrLm7; lAiHs: $fields = $this->db->field_data($table); goto lQ6Pa; K4JbY: } goto bNikS; y_CuS: if (count($messages) > 0) { goto Gz59G; } goto djAVm; PIDYN: $tables = []; goto RsL19; RsL19: $tabless = $this->db->list_tables(); goto OQ7_L; bNikS: ACR9X: goto d5LiU; Be7o1: goto R99ZK; goto eWkg3; ub_i6: $this->output_json(["\x73\x74\x61\164\x75\x73" => true, "\155\x65\163\x73\141\x67\x65" => "\105\x6b\163\153\165\x6c\x20\142\x65\162\150\141\163\x69\x6c\x20\144\151\150\x61\x70\x75\163"]); goto y29Jp; y29Jp: R99ZK: goto mjj4y; CbdFM: Gz59G: goto VuVc9; zdmQr: f4VL6: goto Bh1P2; pf0Cj: $this->output_json(["\x73\x74\x61\164\x75\163" => false, "\155\145\x73\163\141\x67\x65" => "\105\153\x73\153\165\154\x20\x67\141\147\x61\154\x20\x64\x69\150\x61\160\x75\163"]); goto Be7o1; VuVc9: $this->output_json(["\x73\164\x61\x74\x75\163" => false, "\x74\157\x74\x61\154" => "\x4d\x61\x70\x65\154\x20\x64\x69\x67\165\156\141\153\141\x6e\x20\144\151\40" . count($messages) . "\x20\164\141\x62\145\154\x3a\74\x62\x72\76" . implode("\x3c\142\162\76", $messages)]); goto zdmQr; djAVm: if ($this->master->delete("\155\141\x73\x74\x65\x72\137\x65\153\163\164\162\141", [$id], "\151\x64\137\x65\x6b\x73\x74\x72\141")) { goto x89bB; } goto pf0Cj; eWkg3: x89bB: goto ub_i6; Tf4D0: abQ2B: goto y_CuS; d5LiU: $this->output_json($tables); goto MZjR1; MZjR1: foreach ($tables as $table) { goto JZIux; vI36L: J3nnr: goto YnPaz; WWOky: MzSao: goto nJPii; JZIux: if (!($table != "\x6d\x61\163\164\x65\162\x5f\145\x6b\163\x74\162\x61")) { goto nYANM; } goto Dr0Da; Dr0Da: $this->db->where("\151\144\x5f\x65\x6b\x73\164\x72\x61", $id); goto zt3mo; LDO7J: if (!($num > 0)) { goto J3nnr; } goto EOJKj; EOJKj: array_push($messages, $table); goto vI36L; YnPaz: nYANM: goto WWOky; zt3mo: $num = $this->db->count_all_results($table); goto LDO7J; nJPii: } goto Tf4D0; Bh1P2: } public function save() { goto qFnAY; ADALx: URAjB: goto ch3w4; kg6JL: $tp = $this->master->getTahunActive()->id_tp; goto AUWET; qFnAY: $check_kelas = json_decode(json_encode(json_decode($this->input->post("\x6b\145\x6c\141\163", true)))); goto kg6JL; G7Ljm: $update = []; goto hAbpI; GByNH: $this->output_json($res); goto NYUCK; BsFVP: $res["\165\x70\144\141\x74\x65"] = $update; goto GByNH; HHOQB: $row_insert = 0; goto G7Ljm; AUWET: $smt = $this->master->getSemesterActive()->id_smt; goto HHOQB; hAbpI: foreach ($check_kelas as $key => $kls) { goto EzmpC; JDcMj: IKJdr: goto Zr9dO; gzP0L: goto u3NOr; goto oPhIZ; EzmpC: $check_ekskul = $this->input->post("\x65\x6b\163\153\x75\154" . $kls->kls_id, true); goto BZG6T; oPhIZ: q6wBB: goto SN9Vw; CB3uc: $kelaseks = $this->input->post("\x65\153\163\153\x75\x6c" . $kls->kls_id . "\133" . $j . "\135", true); goto UQ21p; Zr9dO: rR5yB: goto AjnsM; BIKyD: kb25z: goto bjEqW; WEzmx: $update[] = $this->db->replace("\153\x65\154\x61\163\x5f\145\153\x73\x74\162\141", $ekstras); goto JDcMj; bjEqW: $j++; goto gzP0L; BZG6T: if (!$check_ekskul) { goto IKJdr; } goto NMjEA; XCY4U: $j = 0; goto ZmT4p; UQ21p: $ekstra[] = ["\x65\x6b\x73\164\x72\x61" => $kelaseks]; goto BIKyD; EMw50: if (!($j <= $row_ekskul)) { goto q6wBB; } goto CB3uc; SN9Vw: $ekstras = ["\x69\x64\137\x6b\x65\x6c\141\x73\x5f\145\153\x73\x74\x72\x61" => $kls->kls_id . $tp . $smt, "\151\x64\x5f\153\x65\x6c\x61\x73" => $kls->kls_id, "\x69\x64\137\x74\160" => $tp, "\x69\x64\x5f\163\155\x74" => $smt, "\145\153\x73\x74\x72\141" => serialize($ekstra)]; goto WEzmx; NMjEA: $row_ekskul = count($this->input->post("\x65\x6b\163\x6b\x75\x6c" . $kls->kls_id, true)); goto Bypw_; Bypw_: $ekstra = []; goto XCY4U; ZmT4p: u3NOr: goto EMw50; AjnsM: } goto ADALx; ch3w4: $res["\x73\164\x61\x74\x75\x73"] = true; goto BsFVP; NYUCK: } public function import($import_data = null) { goto kd7Dr; Wc3UG: $this->load->view("\137\x74\145\x6d\x70\x6c\x61\164\x65\x73\57\x64\x61\163\150\x62\x6f\x61\162\144\x2f\137\x68\145\x61\144\145\162", $data); goto GKtDg; mr3Us: $data["\151\155\x70\x6f\x72\164"] = $import_data; goto rTP6i; dmtUG: $data["\164\x70\137\x61\143\x74\151\166\x65"] = $this->dashboard->getTahunActive(); goto ises2; GKtDg: $this->load->view("\155\x61\163\x74\145\x72\57\x65\x6b\x73\164\x72\141\x2f\151\x6d\160\157\x72\x74"); goto gXY1K; obR8C: if (!($import_data != null)) { goto nw2Tn; } goto mr3Us; ises2: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto n1Bpd; gXY1K: $this->load->view("\137\x74\145\155\160\x6c\141\164\x65\163\x2f\144\x61\x73\x68\142\157\141\162\144\x2f\x5f\x66\157\157\x74\x65\162"); goto V0Vhw; kd7Dr: $user = $this->ion_auth->user()->row(); goto btwrf; GgjJR: $data["\164\160"] = $this->dashboard->getTahun(); goto dmtUG; rTP6i: nw2Tn: goto GgjJR; n1Bpd: $data["\163\x6d\x74\x5f\141\143\164\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto Wc3UG; btwrf: $data = ["\165\163\145\x72" => $user, "\152\x75\144\165\x6c" => "\x4d\x61\164\x61\40\120\x65\x6c\141\x6a\141\x72\x61\156", "\163\x75\x62\152\x75\x64\x75\154" => "\x49\x6d\x70\x6f\x72\x74\x20\x4d\141\x74\141\x20\x50\145\154\x61\x6a\x61\162\x61\156", "\x70\x72\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto obR8C; V0Vhw: } }
