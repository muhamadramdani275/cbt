<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\105\120\101\124\110") or exit("\x4e\157\40\x64\151\x72\x65\x63\164\x20\x73\143\x72\151\x70\164\x20\x61\x63\x63\x65\x73\x73\x20\141\154\x6c\157\x77\145\144"); class Datatahun extends CI_Controller { public function __construct() { goto JIPok; yIuhB: xoIJz: goto JloCl; X_RkH: redirect("\x61\165\x74\x68"); goto yIuhB; JloCl: $this->load->library(["\144\141\x74\x61\x74\x61\x62\154\x65\x73", "\146\x6f\x72\155\137\x76\x61\x6c\151\144\141\x74\151\x6f\156"]); goto ONLht; nW09d: $this->form_validation->set_error_delimiters('', ''); goto QVWHY; RgRXK: if (!$this->ion_auth->logged_in()) { goto MWoMM; } goto khopd; x5JuT: MWoMM: goto X_RkH; mgv5B: show_error("\110\141\156\x79\x61\40\x41\x64\x6d\151\156\151\163\x74\162\x61\x74\157\x72\x20\x79\141\156\147\x20\x64\x69\142\145\162\x69\40\x68\141\153\40\x75\156\164\x75\153\x20\x6d\145\156\x67\141\x6b\x73\145\163\40\150\141\154\141\155\x61\x6e\40\151\156\151\54\40\x3c\x61\40\150\x72\145\146\75\42" . base_url("\144\141\163\150\142\157\141\162\x64") . "\42\76\113\145\x6d\142\141\154\x69\40\153\x65\x20\155\145\x6e\165\40\141\167\141\x6c\74\x2f\141\76", 403, "\101\x6b\x73\145\163\40\124\x65\162\x6c\141\162\x61\x6e\147"); goto tjBBG; tjBBG: aYQht: goto N0sST; khopd: if ($this->ion_auth->is_admin()) { goto aYQht; } goto mgv5B; JIPok: parent::__construct(); goto RgRXK; ONLht: $this->load->model("\x4d\x61\163\x74\145\162\137\x6d\x6f\144\x65\x6c", "\x6d\141\163\164\x65\162"); goto tgA13; N0sST: goto xoIJz; goto x5JuT; tgA13: $this->load->model("\x44\141\x73\150\x62\x6f\141\x72\144\137\x6d\157\x64\x65\154", "\x64\141\x73\150\142\157\141\x72\x64"); goto Tc_wP; Tc_wP: $this->load->model("\x4c\157\x67\137\x6d\157\144\x65\x6c", "\x6c\x6f\147\x67\151\156\147"); goto nW09d; QVWHY: } public function output_json($data, $encode = true) { goto Epzh5; okKxx: eH_6m: goto NJ0TW; Epzh5: if (!$encode) { goto eH_6m; } goto cjwIS; NJ0TW: $this->output->set_content_type("\141\x70\x70\x6c\x69\x63\141\164\x69\157\156\57\x6a\x73\x6f\x6e")->set_output($data); goto sJWzL; cjwIS: $data = json_encode($data); goto okKxx; sJWzL: } public function index() { goto xZWah; IqeI0: $tp = $this->dashboard->getTahunActive(); goto ylXfJ; Cxj7I: $data["\x74\x70\137\141\x63\x74\x69\x76\145"] = $tp; goto Ljk6L; ylXfJ: $smt = $this->dashboard->getSemesterActive(); goto RkJ0C; KaJqh: $data["\x73\155\x74\137\141\x63\x74\151\x76\x65"] = $smt; goto lDaG1; xZWah: $user = $this->ion_auth->user()->row(); goto ByxwO; ByxwO: $data = ["\x75\x73\145\162" => $user, "\x6a\x75\x64\165\154" => "\124\141\150\x75\x6e\x20\x50\x65\154\141\x6a\141\162\141\x6e\x20\x64\x61\156\40\123\145\155\x65\x73\x74\x65\162", "\163\x75\142\x6a\x75\x64\165\154" => "\101\164\165\x72\40\124\141\x68\x75\x6e\40\x50\145\x6c\141\152\141\x72\141\156\x20\144\x61\x6e\x20\123\x65\x6d\x65\x73\164\145\x72", "\x70\x72\x6f\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()]; goto IqeI0; YfE42: $data["\152\155\x6c\137\x68\x61\x72\x69"] = $jml == null ? "\x30" : $jml->jml_hari_efektif; goto bqLCD; RkJ0C: $data["\164\160"] = $this->dashboard->getTahun(); goto Cxj7I; lDaG1: $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt); goto YfE42; bqLCD: $this->load->view("\137\x74\x65\x6d\160\154\141\x74\145\x73\x2f\x64\141\163\150\x62\x6f\141\x72\x64\57\x5f\150\145\x61\x64\x65\162", $data); goto LNiRw; JXaUY: $this->load->view("\x5f\164\145\155\x70\x6c\x61\164\x65\163\57\x64\141\163\x68\x62\x6f\x61\162\144\x2f\x5f\x66\157\157\x74\x65\x72"); goto hHWPH; Ljk6L: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto KaJqh; LNiRw: $this->load->view("\155\141\x73\164\145\162\57\x74\141\x68\x75\x6e\57\144\141\164\x61"); goto JXaUY; hHWPH: } public function data() { $this->output_json($this->dashboard->getDataTahun(), false); } public function gantiTahun() { goto cMvBE; Jmo5n: $data["\165\x70\144\141\x74\145"] = $update; goto eCr_e; CmENa: $inputTp = json_decode($this->input->post("\164\x61\150\165\156", false)); goto K1RL1; XiEXF: $this->dashboard->update("\155\141\163\x74\x65\162\x5f\164\160", $update, "\151\x64\137\x74\160", null, true); goto eRQ1I; cMvBE: $aktif = $this->input->post("\x61\x63\164\151\166\145", true); goto CmENa; eCr_e: $data["\163\164\141\x74\165\163"] = true; goto CFLfj; nyljd: $this->output_json($data); goto HywlU; CFLfj: $this->logging->saveLog(4, "\155\x65\156\147\147\x61\156\164\151\x20\x74\141\150\x75\156\40\x61\152\141\x72\x61\156\40\x61\153\164\x69\146"); goto nyljd; eRQ1I: $data["\x6d\x73\x67"] = "\115\x65\162\165\142\141\x68\x20\x54\x61\x68\165\156\40\101\153\164\151\146"; goto Jmo5n; riU1O: aisvQ: goto XiEXF; K1RL1: foreach ($inputTp as $tps) { goto U2WCU; v15_S: if ($id_tp === $aktif) { goto Pu_6r; } goto RmWWa; JFRe5: Pu_6r: goto NeUOG; TY7lc: b_QK3: goto Njqfv; qhGei: Gq3Gy: goto wDxfJ; U2WCU: $id_tp = $tps->id; goto EK8zT; RmWWa: $active = 0; goto JNS6n; Njqfv: $update[] = array("\151\144\137\164\160" => $id_tp, "\164\141\150\x75\156" => $tahun, "\141\143\164\151\x76\145" => $active); goto qhGei; JNS6n: goto b_QK3; goto JFRe5; EK8zT: $tahun = $tps->tp; goto v15_S; NeUOG: $active = 1; goto TY7lc; wDxfJ: } goto riU1O; HywlU: } public function gantiSemester() { goto fJVUo; sAn0G: $this->output_json($data); goto yM9iA; RIHKd: ixpO7: goto hwU6Y; Mq3rF: $data["\155\163\147"] = "\x4d\x65\162\165\142\x61\x68\x20\123\x65\155\145\x73\x74\145\x72\x20\x41\x6b\x74\x69\146"; goto meQQo; meQQo: $data["\165\160\144\x61\164\x65"] = $update; goto Z2HcF; Z2HcF: $data["\163\x74\141\164\165\x73"] = true; goto EwNIM; wbigU: $inputSmt = json_decode($this->input->post("\163\x65\x6d\x65\163\164\145\162", false)); goto QP33N; QP33N: foreach ($inputSmt as $tps) { goto JiFkY; j3tMv: if ($id_smt === $aktif) { goto awWWO; } goto dot4R; JiFkY: $id_smt = $tps->id; goto aAYLa; SA3XO: goto Bs12f; goto OWAIf; MqGED: $update[] = array("\151\x64\x5f\163\155\164" => $id_smt, "\x73\x6d\x74" => $smt, "\x61\143\164\x69\x76\145" => $active); goto SvbCc; dot4R: $active = 0; goto SA3XO; SvbCc: JXKLt: goto kWaIJ; NY2fY: $active = 1; goto GAPUm; aAYLa: $smt = $tps->Semester; goto j3tMv; GAPUm: Bs12f: goto MqGED; OWAIf: awWWO: goto NY2fY; kWaIJ: } goto RIHKd; fJVUo: $aktif = $this->input->post("\x61\143\x74\151\166\x65", true); goto wbigU; hwU6Y: $this->dashboard->update("\x6d\x61\x73\x74\145\x72\137\163\x6d\164", $update, "\x69\x64\x5f\163\155\x74", null, true); goto Mq3rF; EwNIM: $this->logging->saveLog(4, "\x6d\145\x6e\x67\x67\141\x6e\x74\x69\x20\163\x65\x6d\145\x73\164\145\x72\x20\x61\153\x74\x69\x66"); goto sAn0G; yM9iA: } public function add() { goto BGjw1; NI86_: $tahun = $this->input->post("\164\x61\150\165\156", true); goto mEitk; KTm_m: $data = $this->master->update("\155\141\x73\164\145\x72\137\164\160", $update, "\x69\144\137\164\x70", $id); goto hfjlx; mEitk: if ($method === "\x61\144\144") { goto D6XWf; } goto XYWYp; BGjw1: $method = $this->input->post("\155\145\x74\x68\157\x64", true); goto NI86_; T2iDY: goto gbaWA; goto MXdDB; RICoJ: $data = $this->master->create("\155\x61\x73\164\x65\x72\137\x74\x70", $insert); goto I0JA5; MXdDB: D6XWf: goto ZhHYu; WMchj: $this->output->set_content_type("\x61\x70\x70\154\x69\x63\141\x74\151\x6f\x6e\x2f\152\x73\x6f\156")->set_output($data); goto usvJf; hfjlx: $this->logging->saveLog(4, "\x6d\x65\x6e\147\x65\144\x69\x74\40\x74\141\150\x75\156\40\160\145\154\141\152\x61\x72\141\156"); goto T2iDY; At5yD: gbaWA: goto WMchj; XYWYp: $id = $this->input->post("\151\144\x5f\164\x61\x68\165\156", true); goto qeYPQ; qeYPQ: $update = array("\x69\144\137\164\160" => $id, "\x74\141\150\165\x6e" => $tahun); goto KTm_m; ZhHYu: $insert = ["\x74\141\x68\165\x6e" => $tahun]; goto RICoJ; I0JA5: $this->logging->saveLog(3, "\x6d\x65\156\141\x6d\x62\141\x68\40\164\x61\150\x75\x6e\40\x70\145\x6c\x61\x6a\141\x72\141\156"); goto At5yD; usvJf: } public function saveHariEfektif() { goto LaEW6; LaEW6: $tp = $this->dashboard->getTahunActive(); goto xnnlO; t_GfV: $this->output_json($data); goto r0psv; TjE7b: $data["\x73\164\x61\x74\165\163"] = $update; goto t_GfV; xnnlO: $smt = $this->dashboard->getSemesterActive(); goto nsqo3; nsqo3: $input = ["\151\x64\x5f\x68\x61\x72\x69\x5f\x65\x66\x65\153\x74\151\x66" => $tp->id_tp . $smt->id_smt, "\x6a\155\154\x5f\x68\141\x72\151\137\x65\146\145\153\164\151\x66" => $this->input->post("\x6a\155\154\x5f\150\141\x72\151", true)]; goto lfwv6; lfwv6: $update = $this->db->replace("\x6d\x61\163\x74\145\162\x5f\x68\x61\162\151\x5f\x65\146\145\153\164\151\x66", $input); goto TjE7b; r0psv: } public function hapusTahun() { goto o0kln; o0kln: $id = $this->input->post("\x68\x61\x70\165\x73", true); goto OR6qe; wOW1e: bL71h: goto zYZIH; VWHBa: $data["\163\x74\141\164\165\163"] = false; goto vNOU4; rg8X7: $this->output_json($data); goto g_M8U; nZ8x2: $this->logging->saveLog(5, "\x6d\145\156\147\150\141\x70\165\163\x20\164\141\x68\165\156\x20\160\145\x6c\141\152\x61\162\141\156"); goto nZthH; OR6qe: if ($this->dashboard->hapus("\x6d\141\163\x74\x65\x72\137\164\160", $id, "\151\144\x5f\164\160")) { goto C1pgt; } goto VWHBa; xSlYO: C1pgt: goto nZ8x2; zYZIH: $data["\x6d\x73\x67"] = "\115\x65\x6e\x67\150\x61\160\x75\x73\40\124\141\x68\165\x6e\40\120\x65\154\x61\x6a\x61\x72\x61\156"; goto rg8X7; vNOU4: goto bL71h; goto xSlYO; nZthH: $data["\x73\164\x61\164\165\163"] = true; goto wOW1e; g_M8U: } public function hapus() { goto mFCU9; dUaWg: if (!$chk) { goto s56am; } goto KsWFi; zdrGP: s56am: goto evuSB; mFCU9: $chk = $this->input->post("\143\x68\x65\x63\153\x65\144", true); goto dUaWg; KsWFi: if (!$this->dashboard->hapus("\x6d\x61\163\164\145\162\137\164\x70", $chk, "\151\x64\x5f\164\x70")) { goto IlnT0; } goto rDLoC; rDLoC: $this->logging->saveLog(5, "\155\145\156\147\x68\141\x70\165\163\40\164\141\150\x75\x6e\40\160\x65\154\141\152\x61\162\x61\x6e"); goto qA_4E; Rpksu: goto EYWuM; goto zdrGP; qA_4E: $this->output_json(["\163\x74\x61\x74\x75\x73" => true, "\x74\157\x74\141\x6c" => count($chk)]); goto t8b8Z; evuSB: $this->output_json(["\163\x74\x61\164\x75\163" => false]); goto k5Ktc; t8b8Z: IlnT0: goto Rpksu; k5Ktc: EYWuM: goto YvGLK; YvGLK: } }
