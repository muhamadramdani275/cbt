<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\105\120\x41\124\110") or exit("\116\157\40\x64\151\x72\x65\143\x74\x20\x73\x63\162\151\160\x74\x20\141\143\143\145\163\163\40\141\x6c\x6c\157\x77\x65\x64"); class Datakelas extends CI_Controller { public function __construct() { goto d3gXO; g6Ubw: K4F_0: goto Z1z34; FotH_: redirect("\141\165\x74\150"); goto g6Ubw; q5ZQ6: $this->load->model("\115\141\x73\164\145\162\x5f\x6d\157\x64\145\154", "\x6d\141\x73\x74\x65\x72"); goto kNnXY; I8feW: if (!$this->ion_auth->logged_in()) { goto iRyts; } goto g4OLy; WAAb5: F03wP: goto lXfJd; cCAyS: show_error("\110\141\x6e\171\141\x20\x41\144\155\151\x6e\x69\163\x74\x72\141\x74\157\x72\x20\171\141\x6e\x67\x20\x64\x69\142\145\162\151\40\x68\x61\x6b\x20\165\x6e\164\x75\153\x20\155\x65\156\x67\141\x6b\x73\145\163\x20\x68\x61\154\141\155\141\156\40\151\x6e\x69\x2c\40\x3c\x61\x20\x68\x72\145\x66\75\x22" . base_url("\x64\x61\x73\x68\x62\x6f\141\x72\x64") . "\x22\x3e\x4b\145\x6d\x62\141\x6c\151\40\x6b\145\x20\x6d\145\x6e\165\40\141\167\141\x6c\x3c\57\141\x3e", 403, "\x41\153\163\x65\163\40\x54\145\162\x6c\141\162\x61\156\x67"); goto WAAb5; d3gXO: parent::__construct(); goto I8feW; Szuws: $this->load->model("\x44\141\163\150\x62\x6f\141\162\x64\137\155\157\144\x65\x6c", "\144\141\x73\x68\142\x6f\x61\x72\x64"); goto q5ZQ6; njAz6: $this->load->model("\x52\141\x70\x6f\x72\137\155\157\144\145\154", "\x72\x61\x70\x6f\162"); goto yjdU4; kNnXY: $this->load->model("\x44\162\157\160\144\157\167\156\137\x6d\157\x64\x65\154", "\144\x72\x6f\160\x64\x6f\x77\x6e"); goto njAz6; Uy7qW: $this->load->model("\113\145\154\141\163\137\x6d\x6f\144\x65\x6c", "\153\x65\154\x61\x73"); goto Szuws; YIyMM: iRyts: goto FotH_; yjdU4: $this->form_validation->set_error_delimiters('', ''); goto uJN4C; lXfJd: goto K4F_0; goto YIyMM; g4OLy: if ($this->ion_auth->is_admin()) { goto F03wP; } goto cCAyS; Z1z34: $this->load->library(["\144\141\164\141\x74\x61\142\154\x65\163", "\146\x6f\162\155\x5f\166\141\x6c\x69\x64\141\164\x69\157\156"]); goto Uy7qW; uJN4C: } public function output_json($data, $encode = true) { goto p0dPj; L4EIK: $data = json_encode($data); goto s4LdS; hjHbR: $this->output->set_content_type("\141\x70\x70\154\x69\x63\141\x74\x69\157\156\57\x6a\x73\x6f\x6e")->set_output($data); goto TPiEV; s4LdS: pLaaP: goto hjHbR; p0dPj: if (!$encode) { goto pLaaP; } goto L4EIK; TPiEV: } public function index() { goto mJleq; If_wB: $this->load->view("\137\164\x65\155\160\x6c\141\x74\x65\163\57\144\x61\163\150\142\157\141\x72\x64\x2f\137\150\x65\141\x64\145\x72", $data); goto ldYEC; Bn_9F: $data["\164\160\137\141\143\x74\151\166\145"] = $tp; goto vJjNd; SEnIP: $this->load->view("\137\x74\145\155\x70\x6c\x61\164\145\x73\57\144\141\x73\x68\x62\157\x61\x72\144\x2f\137\x66\157\x6f\164\x65\x72"); goto OrLYs; e12RL: $data["\x73\155\164\137\141\143\164\151\x76\145"] = $smt; goto WgsIk; hrHWT: $data = ["\x75\163\x65\x72" => $user, "\x6a\165\144\x75\x6c" => "\113\x65\x6c\141\163", "\x73\x75\142\152\165\x64\165\x6c" => "\x44\141\164\x61\40\113\x65\x6c\141\x73", "\x73\145\x74\164\x69\156\147" => $setting]; goto GOUHt; LlCpa: $kelas_lama = []; goto NjFHk; npxve: $data["\x67\165\162\165"] = $this->kelas->get_guru(); goto h1KKz; HlKtJ: $smt = $this->dashboard->getSemesterActive(); goto TPDBi; rVcH0: $data["\152\x75\162\165\x73\x61\x6e"] = $this->kelas->get_jurusan(); goto l7P0I; vJjNd: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto e12RL; c3ewH: BBvMH: goto ea2Cu; ea2Cu: $data["\x6b\x65\154\x61\x73"] = $kelas; goto wp9oz; l7P0I: $data["\x6c\x65\166\145\x6c"] = $this->kelas->getLevel($setting->jenjang); goto npxve; h1KKz: $data["\x73\151\x73\x77\141"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto If_wB; TPDBi: $data["\x74\160"] = $this->dashboard->getTahun(); goto Bn_9F; GOUHt: $tp = $this->dashboard->getTahunActive(); goto HlKtJ; wp9oz: $data["\x6b\145\154\141\x73\137\154\141\x6d\x61"] = $kelas_lama; goto rVcH0; dLOqi: $kelas = $this->kelas->getKelasList($tp->id_tp, $smt->id_smt); goto MHsnN; ldYEC: $this->load->view("\155\141\x73\164\x65\162\x2f\x6b\145\154\x61\x73\57\144\141\164\x61"); goto SEnIP; MHsnN: $kelas_lama = $this->kelas->getKelasList($tp->id_tp - 1, "\62"); goto c3ewH; f8GOA: $setting = $this->dashboard->getSetting(); goto hrHWT; C4wD0: $kelas = []; goto LlCpa; Lz_Cz: $chek = $this->kelas->count_all(); goto C4wD0; mJleq: $user = $this->ion_auth->user()->row(); goto f8GOA; NjFHk: if (!($chek > 0)) { goto BBvMH; } goto dLOqi; WgsIk: $data["\x70\162\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Lz_Cz; OrLYs: } public function detail($id) { goto csOGL; pboRS: $struktur = $this->kelas->getStrukturKelas($id); goto V8yhK; R41yc: $data["\x67\x75\x72\x75"] = $this->kelas->get_guru(); goto qbYbE; lsEtA: goto XhDmn; goto KH14e; HaahH: $tp = $this->dashboard->getTahunActive(); goto jebo7; V8yhK: if ($struktur == null) { goto NNPKC; } goto BkzwK; tq_xu: $this->load->view("\x6d\141\x73\x74\145\x72\57\x6b\x65\154\x61\x73\x2f\x64\x65\164\x61\x69\154"); goto i66Uc; nmvx_: $this->load->view("\137\164\x65\155\160\154\141\x74\x65\x73\x2f\144\x61\163\x68\142\x6f\x61\162\144\x2f\137\150\145\141\144\145\162", $data); goto tq_xu; MMK5N: $data["\x73\x74\x72\x75\x6b\x74\165\x72"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto th5hG; jebo7: $smt = $this->dashboard->getSemesterActive(); goto NSykr; NSykr: $data["\x74\x70"] = $this->dashboard->getTahun(); goto BgSN7; zPVkY: $data["\152\x75\x72\x75\163\x61\x6e"] = $this->kelas->get_jurusan(); goto QPHIR; TL2WU: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto z1XWp; z1XWp: $data["\x73\155\164\x5f\141\143\x74\x69\x76\x65"] = $smt; goto uuoxA; qbYbE: $data["\x73\x69\163\x77\141\x73"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt); goto pboRS; M3SUg: $data = ["\x75\x73\145\162" => $user, "\152\165\144\x75\154" => "\104\145\x74\x61\151\x6c\40\113\x65\154\141\x73", "\x73\x75\x62\x6a\165\x64\x75\154" => "\x44\x65\164\x61\151\154\40\113\145\154\141\163", "\x73\x65\164\164\151\156\147" => $setting]; goto HaahH; BkzwK: $data["\163\x74\x72\165\x6b\164\165\x72"] = $struktur; goto lsEtA; KH14e: NNPKC: goto MMK5N; BgSN7: $data["\164\160\137\x61\x63\164\x69\x76\x65"] = $tp; goto TL2WU; QPHIR: $data["\x6c\145\166\145\x6c"] = $this->kelas->getLevel($setting->jenjang); goto R41yc; th5hG: XhDmn: goto nmvx_; h5QTB: $data["\153\x65\x6c\x61\x73"] = $this->kelas->get_one($id); goto zPVkY; csOGL: $user = $this->ion_auth->user()->row(); goto rPVcu; i66Uc: $this->load->view("\137\x74\x65\x6d\160\x6c\141\164\x65\x73\x2f\x64\x61\163\150\142\x6f\x61\162\144\x2f\x5f\146\x6f\157\x74\x65\x72"); goto Yj2Zl; rPVcu: $setting = $this->dashboard->getSetting(); goto M3SUg; uuoxA: $data["\160\x72\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto h5QTB; Yj2Zl: } public function add() { goto P5iA3; kxkco: $setting = $this->dashboard->getSetting(); goto PhNq8; SKpPy: $data["\154\x65\166\145\154"] = $this->kelas->getLevel($setting->jenjang); goto lX0pX; YHpU7: $this->load->view("\137\x74\145\x6d\160\x6c\x61\164\x65\x73\57\x64\141\x73\150\142\x6f\x61\162\x64\57\137\x66\157\157\164\x65\x72"); goto BG09H; FHbFi: $data["\163\155\164\x5f\x61\x63\x74\151\x76\x65"] = $smt; goto DXwMQ; abZL2: $tp = $this->dashboard->getTahunActive(); goto xMnT7; WRNU1: $this->load->view("\155\x61\x73\164\x65\162\57\x6b\145\154\141\163\57\141\x64\144"); goto YHpU7; lzcZE: $data["\152\165\162\165\163\141\x6e"] = $this->kelas->get_jurusan(); goto SKpPy; KO3p_: $this->load->view("\x5f\x74\x65\x6d\160\154\x61\x74\145\x73\57\144\141\x73\150\x62\x6f\141\162\x64\57\137\150\x65\141\144\x65\x72", $data); goto WRNU1; XJ0uO: $data["\x6b\145\154\141\x73"] = json_decode(json_encode($this->kelas->dummy())); goto lzcZE; xMnT7: $smt = $this->dashboard->getSemesterActive(); goto P91BI; PhNq8: $data = ["\165\163\145\x72" => $user, "\x6a\x75\x64\x75\154" => "\x4b\145\x6c\x61\163", "\163\165\142\152\165\144\x75\154" => "\x54\141\x6d\x62\x61\x68\x20\113\x65\x6c\x61\x73", "\x73\x65\164\164\151\x6e\147" => $setting]; goto abZL2; P91BI: $data["\x74\x70"] = $this->dashboard->getTahun(); goto FCaYM; LQ0Ws: $siswa = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto JI4FQ; JI4FQ: $data["\x73\151\163\x77\141"] = $siswa; goto iCAog; iCAog: $data["\x73\x69\163\x77\141\153\145\154\x61\x73"] = array(); goto KO3p_; D61fB: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto FHbFi; lX0pX: $data["\x67\x75\x72\x75"] = $this->kelas->get_guru(); goto LQ0Ws; DXwMQ: $data["\x70\162\x6f\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto XJ0uO; P5iA3: $user = $this->ion_auth->user()->row(); goto kxkco; FCaYM: $data["\164\160\137\x61\143\x74\x69\x76\145"] = $tp; goto D61fB; BG09H: } public function edit($id = '') { goto iWksR; w407S: $data["\x6b\x65\154\x61\163"] = $this->kelas->get_one($id); goto fS2Wo; iWksR: $user = $this->ion_auth->user()->row(); goto WnWV0; IpOFC: $data["\147\165\x72\165"] = $this->kelas->getWaliKelas($tp->id_tp, $smt->id_smt); goto iRK8z; KN1DV: $this->load->view("\x5f\164\145\155\160\154\141\164\x65\163\x2f\144\x61\163\150\142\x6f\x61\x72\x64\x2f\x5f\x68\x65\x61\x64\x65\162", $data); goto CX6MK; KaB4A: $data["\164\160"] = $this->dashboard->getTahun(); goto ttumQ; l11gL: $data["\x70\162\157\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto w407S; KHkqU: $tp = $this->dashboard->getTahunActive(); goto k3qv8; WnWV0: $setting = $this->dashboard->getSetting(); goto E7Og1; sqU_3: $this->load->view("\x5f\164\x65\155\x70\154\141\164\x65\163\57\144\x61\x73\150\x62\x6f\141\x72\x64\57\x5f\146\157\157\x74\145\x72"); goto HnKzy; aBy2f: $data["\154\x65\x76\145\154"] = $this->kelas->getLevel($setting->jenjang); goto IpOFC; E7Og1: $data = ["\165\x73\x65\x72" => $user, "\152\x75\144\165\154" => "\113\145\154\141\163", "\x73\165\x62\152\x75\x64\165\154" => "\105\x64\x69\164\x20\113\x65\x6c\x61\163", "\163\145\x74\164\151\x6e\147" => $setting]; goto KHkqU; CNtVQ: $data["\163\151\x73\167\x61\153\145\x6c\x61\x73"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt); goto KN1DV; ttumQ: $data["\x74\x70\137\x61\143\164\x69\x76\x65"] = $tp; goto b4A9a; iRK8z: $data["\x73\x69\x73\x77\x61"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto CNtVQ; LDEv9: $data["\163\155\164\x5f\141\x63\x74\151\166\x65"] = $smt; goto l11gL; CX6MK: $this->load->view("\155\141\163\x74\145\162\57\153\145\x6c\141\163\57\x61\x64\x64"); goto sqU_3; fS2Wo: $data["\x6a\165\x72\x75\x73\x61\x6e"] = $this->kelas->get_jurusan(); goto aBy2f; b4A9a: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto LDEv9; k3qv8: $smt = $this->dashboard->getSemesterActive(); goto KaB4A; HnKzy: } public function save() { goto YZ7xS; xlZVw: $this->output_json($data); goto J23qL; BLzbQ: $id_tp = $this->master->getTahunActive()->id_tp; goto Lw86R; pR8Lw: $data["\x73\164\141\x74\165\163"] = $status; goto xlZVw; hsFCL: $this->form_validation->set_rules($config); goto empPN; uL6E8: kfQ0C: goto uRREN; YZ7xS: $id = $this->input->post("\x69\144\137\x6b\x65\x6c\x61\163", true); goto gsvm5; grWf8: goto pJTUq; goto st8qr; st8qr: Yc7ov: goto mpLW3; iDXM4: kDuNg: goto grWf8; ODHLR: if (!$id) { goto Yc7ov; } goto hsFCL; lJHuD: $status = FALSE; goto mXIJZ; mXIJZ: goto kDuNg; goto Sa0PB; mT4Wx: pJTUq: goto yb82o; mZGFf: if (!$this->input->post()) { goto kfQ0C; } goto m2u6t; La9mM: $this->db->update("\x6a\x61\142\141\164\x61\156\x5f\147\165\162\x75"); goto CdqvF; yb82o: $this->db->set("\151\x64\137\153\145\x6c\x61\163", $id); goto i1Sc_; lR5bE: $status = FALSE; goto dWpYs; vPQej: $this->kelas->update($id, $id_tp, $id_smt); goto fVOHU; U2S9c: QV9hd: goto mT4Wx; Sa0PB: M24Y8: goto G0cmF; uRREN: $status = TRUE; goto U2S9c; vR0HM: $status = TRUE; goto iDXM4; gsvm5: $guru_id = strip_tags($this->input->post("\147\x75\x72\165\137\151\x64", TRUE)); goto BLzbQ; w9oNg: $config = array(array("\146\x69\x65\x6c\144" => "\156\141\155\141\x5f\x6b\145\154\141\x73", "\x6c\x61\x62\145\154" => "\x4e\x61\155\141\x20\x4b\145\x6c\x61\163", "\x72\x75\154\145\x73" => "\164\162\x69\155"), array("\x66\x69\x65\154\144" => "\x6b\x6f\x64\145\x5f\x6b\145\154\141\x73", "\154\x61\x62\145\x6c" => "\x4b\x6f\144\145\x20\x4b\145\154\141\163", "\x72\165\x6c\145\x73" => "\164\x72\x69\x6d"), array("\x66\151\145\x6c\144" => "\152\x75\162\165\163\141\156\x5f\x69\x64", "\154\141\142\x65\x6c" => "\112\x75\162\x75\x73\x61\x6e", "\162\x75\x6c\145\163" => "\164\x72\151\155"), array("\146\151\x65\x6c\144" => "\x6c\x65\x76\x65\x6c\x5f\151\x64", "\154\x61\x62\x65\154" => "\114\145\166\x65\154", "\x72\165\154\x65\163" => "\164\162\151\x6d"), array("\146\x69\145\154\x64" => "\147\165\x72\x75\137\x69\x64", "\154\141\142\145\154" => "\x47\165\162\x75", "\x72\x75\154\x65\163" => "\164\x72\x69\155"), array("\x66\151\145\154\x64" => "\163\x69\x73\x77\141\137\x69\144", "\154\141\142\145\x6c" => "\x53\151\163\167\141", "\162\165\154\145\163" => "\164\x72\151\x6d")); goto ODHLR; empPN: if ($this->form_validation->run() == TRUE) { goto M24Y8; } goto lJHuD; G0cmF: if (!$this->input->post()) { goto FWHwS; } goto vPQej; CdqvF: $res = $this->update_kelas($id); goto L5POj; mpLW3: $this->form_validation->set_rules($config); goto XyKWo; Lw86R: $id_smt = $this->master->getSemesterActive()->id_smt; goto w9oNg; i1Sc_: $this->db->where("\151\x64\x5f\152\x61\142\x61\x74\x61\x6e\x5f\x67\165\x72\165", $guru_id . $id_tp . $id_smt); goto La9mM; dWpYs: goto QV9hd; goto T1HhB; T1HhB: JGeIX: goto mZGFf; L5POj: $data["\x75\160\144\141\x74\x65"] = $res; goto pR8Lw; XyKWo: if ($this->form_validation->run() == TRUE) { goto JGeIX; } goto lR5bE; fVOHU: FWHwS: goto vR0HM; m2u6t: $id = $this->kelas->save($id_tp, $id_smt); goto uL6E8; J23qL: } public function update_kelas($id) { goto LuOes; XqVhy: QUTT5: goto zab4n; zab4n: EYQNf: goto Lbz9m; Skzgk: $rowsSelect = count($this->input->post("\x73\x69\x73\167\x61", true)); goto L26Ee; d_PS3: $insert = ["\x69\x64\137\153\x65\x6c\141\x73\137\163\151\163\x77\141" => $id_tp . $id_smt . $id_siswa, "\x69\144\137\164\160" => $id_tp, "\151\x64\137\163\155\x74" => $id_smt, "\151\144\137\x6b\145\154\141\x73" => $id, "\x69\x64\x5f\x73\151\x73\167\x61" => $id_siswa]; goto feDYU; jl830: if (!(count($siswakelas) > 0)) { goto EZ78h; } goto MLenh; Lbz9m: $i++; goto e5CsI; RKw3Z: if (!($i <= $rowsSelect)) { goto i0l7D; } goto YGBM1; ugAql: EZ78h: goto Skzgk; MLenh: foreach ($siswakelas as $id_siswa => $sis) { goto tXWlC; TjZLV: xUrNr: goto zzKSJ; exxLK: $this->db->replace("\x6b\145\154\x61\163\x5f\x73\x69\x73\167\x61", $insert); goto TjZLV; tXWlC: $insert = ["\151\144\137\x6b\145\154\141\x73\137\163\x69\163\167\141" => $id_tp . $id_smt . $id_siswa, "\x69\144\137\164\160" => $id_tp, "\151\x64\137\x73\x6d\164" => $id_smt, "\151\x64\x5f\153\x65\154\141\163" => 0, "\x69\144\x5f\163\151\x73\167\141" => $id_siswa]; goto exxLK; zzKSJ: } goto vb2MG; LuOes: $id_tp = $this->master->getTahunActive()->id_tp; goto pcCcz; YGBM1: $id_siswa = $this->input->post("\163\151\163\167\x61\x5b" . $i . "\135", true); goto cuKig; L26Ee: $i = 0; goto YcF5I; koFDp: $siswakelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt); goto jl830; q43BC: i0l7D: goto OuVFG; pcCcz: $id_smt = $this->master->getSemesterActive()->id_smt; goto koFDp; OuVFG: return $siswakelas; goto L1Tkz; feDYU: $this->db->replace("\x6b\145\154\x61\x73\137\x73\x69\x73\x77\x61", $insert); goto XqVhy; e5CsI: goto V0_0e; goto q43BC; vb2MG: nGKER: goto ugAql; cuKig: if (!($id_siswa != null)) { goto QUTT5; } goto d_PS3; YcF5I: V0_0e: goto RKw3Z; L1Tkz: } public function manage() { goto XOzCF; VKCfY: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto zTcxz; bA7eX: $data["\153\145\x6c\x61\x73\62"] = $this->dropdown->getAllKelas($tp->id_tp, "\x32"); goto zRPFD; D5qUz: $this->load->view("\x6d\141\x73\x74\145\162\57\x6b\x65\154\141\x73\57\x70\x65\x72\163\145\155\145\163\x74\x65\162"); goto MJmHq; zTcxz: $data["\x73\155\x74\137\141\143\164\151\x76\x65"] = $smt; goto zjK_n; GVfrp: $data = ["\x75\x73\145\162" => $user, "\x6a\x75\144\165\x6c" => "\103\157\160\171\40\x4b\145\x6c\141\x73", "\163\165\x62\x6a\x75\144\x75\x6c" => "\x43\157\x70\x79\x20\104\x61\x74\141\40\x4b\145\x6c\141\x73\x20\153\145\x20\123\115\x54\x20\x49\111", "\x73\145\x74\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto IrE73; IrE73: $tp = $this->dashboard->getTahunActive(); goto Y_zs0; zjK_n: $data["\x70\162\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto xfwon; zRPFD: $this->load->view("\137\164\x65\155\160\154\x61\x74\x65\x73\x2f\144\141\x73\x68\x62\x6f\x61\162\144\57\x5f\x68\x65\x61\x64\145\162", $data); goto D5qUz; Eyu9P: $data["\164\x70\137\141\x63\x74\x69\166\x65"] = $tp; goto VKCfY; Y_zs0: $smt = $this->dashboard->getSemesterActive(); goto rivFl; XOzCF: $user = $this->ion_auth->user()->row(); goto GVfrp; MJmHq: $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\x74\145\163\57\x64\x61\x73\x68\142\x6f\141\x72\144\x2f\137\146\157\157\164\x65\x72"); goto QRJso; rivFl: $data["\164\x70"] = $this->dashboard->getTahun(); goto Eyu9P; xfwon: $data["\x6b\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, "\61"); goto bA7eX; QRJso: } public function getFromSmt1($kelas) { goto hs1Jv; l67xB: gOSrL: goto Jq9xh; ArZeo: $data2 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\62"); goto NiXzE; hs1Jv: $tp = $this->dashboard->getTahunActive(); goto X0jHe; Jq9xh: dYlYx: goto EQl7Y; X0jHe: $data1 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\x31"); goto ArZeo; NiXzE: $ids = []; goto WZb75; gN6zv: foreach ($data2 as $s) { $ids[] = $s->id_siswa; T4Yr5: } goto l67xB; EQl7Y: $this->output_json(["\x73\x6d\164\61" => $data1, "\x73\x6d\x74\x32" => $ids]); goto ZgQpK; WZb75: if (!(count($data2) > 0)) { goto dYlYx; } goto gN6zv; ZgQpK: } public function copyFromSmt1() { goto LbyZG; JjaxE: $idk = $this->db->insert_id(); goto tmFeJ; LyGFi: $data = array("\156\x61\x6d\x61\x5f\153\145\154\x61\163" => $kelas2, "\153\x6f\x64\145\137\x6b\145\154\x61\x73" => $kelas->kode_kelas, "\x6a\165\x72\165\x73\x61\156\x5f\x69\144" => $kelas->jurusan_id, "\x69\144\137\164\160" => $tp->id_tp, "\151\144\x5f\x73\x6d\164" => $smt->id_smt, "\154\x65\x76\145\x6c\137\x69\x64" => $kelas->level_id, "\x67\x75\162\165\x5f\x69\144" => $kelas->guru_id, "\163\151\163\x77\141\x5f\151\144" => $kelas->siswa_id, "\x6a\165\155\x6c\141\x68\x5f\163\x69\x73\x77\141" => $kelas->jumlah_siswa); goto gTfC3; GiKEf: $this->output_json($res); goto KR1bL; b5wzy: $kelas2 = $this->input->post("\x6b\x65\x6c\141\163\x5f\142\141\x72\x75", true); goto SxUa9; tmFeJ: $res = []; goto ghCYe; zDD3Z: $smt = $this->dashboard->getSemesterActive(); goto uRPwu; cXMyP: oInoW: goto GiKEf; SxUa9: $kelas = $this->kelas->get_one($kelas1, $tp->id_tp, "\x31"); goto LyGFi; ghCYe: $arrSiswa = unserialize($kelas->jumlah_siswa); goto lwA7j; LbyZG: $tp = $this->dashboard->getTahunActive(); goto zDD3Z; gTfC3: $this->db->insert("\155\x61\x73\x74\145\162\137\x6b\x65\x6c\141\x73", $data); goto JjaxE; uRPwu: $kelas1 = $this->input->post("\153\145\x6c\x61\x73\x5f\154\141\155\141", true); goto b5wzy; lwA7j: foreach ($arrSiswa as $value) { goto ua_8W; QrPYM: $res[] = $this->db->replace("\x6b\145\154\141\x73\x5f\x73\151\x73\167\141", $insert); goto PCUKW; PCUKW: EVckG: goto CzhFz; ua_8W: $id_siswa = $value["\151\144"]; goto xmUUu; xmUUu: if (!($id_siswa != null)) { goto EVckG; } goto XO3vs; XO3vs: $insert = ["\x69\144\137\153\x65\154\x61\x73\137\163\151\x73\x77\141" => $tp->id_tp . $smt->id_smt . $id_siswa, "\151\144\137\x74\160" => $tp->id_tp, "\x69\144\x5f\x73\155\x74" => $smt->id_smt, "\x69\x64\x5f\153\145\154\141\163" => $idk, "\151\144\137\x73\x69\163\167\x61" => $id_siswa]; goto QrPYM; CzhFz: ZbJbT: goto aSd9p; aSd9p: } goto cXMyP; KR1bL: } public function copySiswaFromSmt1() { goto gcIzy; I7Nmt: $siswakelas = []; goto ZVe6D; TnAww: foreach ($idkelases as $ik) { goto aFHry; Gvc1l: umOfZ: goto WvaIS; m4Zdz: zZq1g: goto Gvc1l; OENhU: $data = array("\156\x61\155\141\x5f\153\x65\154\x61\163" => $kelas->nama_kelas, "\x6b\157\144\145\137\x6b\x65\x6c\x61\163" => $kelas->kode_kelas, "\152\x75\162\165\x73\141\x6e\137\x69\x64" => $kelas->jurusan_id, "\151\x64\x5f\x74\160" => $tp->id_tp, "\151\x64\x5f\163\x6d\164" => $smt->id_smt, "\154\x65\166\145\154\137\x69\144" => $kelas->level_id, "\147\165\162\165\137\151\x64" => $kelas->guru_id, "\x73\151\163\x77\x61\x5f\151\144" => $kelas->siswa_id, "\152\165\155\x6c\x61\x68\137\163\151\x73\x77\x61" => $jumlah); goto d0UDk; I4P94: $jumlah = serialize($siswakelas[$ik]); goto OENhU; MhWwj: foreach ($siswakelas[$ik] as $s) { goto Bjf8r; wuK5T: $res[] = $this->db->replace("\153\x65\x6c\x61\163\137\x73\151\x73\167\141", $insert); goto dZJS_; dZJS_: tp9EX: goto FclcS; Bjf8r: $insert = ["\151\x64\x5f\153\x65\x6c\x61\x73\x5f\163\x69\163\167\141" => $tp->id_tp . $smt->id_smt . $s["\151\x64"], "\x69\144\x5f\x74\x70" => $tp->id_tp, "\x69\x64\137\163\155\164" => $smt->id_smt, "\151\144\x5f\153\x65\x6c\x61\163" => $idk, "\151\x64\137\x73\151\x73\167\141" => $s["\151\144"]]; goto wuK5T; FclcS: } goto S1I4X; S1I4X: lTVM8: goto m4Zdz; ESiJN: $idk = $this->db->insert_id(); goto MhWwj; d0UDk: $this->db->insert("\x6d\x61\163\x74\145\x72\137\153\145\154\141\163", $data); goto ESiJN; oTGWy: $kelas = $this->kelas->get_one($ik, $tp->id_tp, "\61"); goto I4P94; aFHry: if (!($ik != '')) { goto zZq1g; } goto oTGWy; WvaIS: } goto Jtr66; Jtr66: UUSUl: goto w56AD; Sk0iY: $idkelases = []; goto I7Nmt; vQd7U: $posts = json_decode($this->input->post("\x6b\x65\x6c\141\163", true)); goto Sk0iY; DHqEs: $idkelases = array_unique($idkelases); goto smyWE; ZVe6D: foreach ($posts as $d) { goto Qpipv; Qpipv: $idkelases[] = $d->id_kelas; goto VwFiz; QPa5G: asDhZ: goto MC0G5; VwFiz: $siswakelas[$d->id_kelas][] = ["\151\144" => $d->id_siswa]; goto QPa5G; MC0G5: } goto uNY22; w56AD: $this->output_json($res); goto S5F4u; gcIzy: $tp = $this->dashboard->getTahunActive(); goto cHQ_G; cHQ_G: $smt = $this->dashboard->getSemesterActive(); goto vQd7U; smyWE: $res = []; goto TnAww; uNY22: mE1Oy: goto DHqEs; S5F4u: } public function kenaikan() { goto Nsr8R; XVuSv: $data["\x74\160"] = $this->dashboard->getTahun(); goto kddVW; bUz7o: $tp = $this->dashboard->getTahunActive(); goto uRdYq; Nsr8R: $kelas = $this->input->get("\x6b\x65\x6c\141\163", true); goto yGnda; QJxFk: QBHFt: goto ENLBT; kddVW: $data["\164\x70\137\x61\143\164\151\166\x65"] = $tp; goto ILPC0; yGnda: $user = $this->ion_auth->user()->row(); goto e8_gO; hk5eZ: $lvlKls = $this->kelas->get_one($kelas, $tp->id_tp - 1, "\62"); goto yfc8D; VFRmL: $data["\153\x65\x6c\x61\x73\x5f\154\141\155\x61"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\62", "\x21\x3d" . $level); goto eGh9a; rj35_: $data["\153\145\x6c\141\163\137\163\x65\x6c\145\x63\x74\145\144"] = $kelas; goto hk5eZ; nOaDU: $this->load->view("\x6d\141\x73\x74\x65\162\57\153\x65\x6c\x61\163\x2f\x6e\141\x69\153\153\145\154\x61\x73"); goto fQ0pC; fQ0pC: $this->load->view("\137\164\x65\x6d\x70\x6c\141\x74\145\x73\57\x64\141\x73\150\142\x6f\141\x72\144\x2f\x5f\146\157\x6f\164\145\162"); goto LuKHs; eGh9a: $data["\153\x65\x6c\x61\x73\137\x62\141\x72\165"] = $this->dropdown->getAllKelas($tp->id_tp, "\61"); goto ZKjcD; Bc7DG: $data["\160\162\157\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto uP7Qj; e8_gO: $setting = $this->dashboard->getSetting(); goto Gs3S0; ZKjcD: if (!($kelas != null)) { goto QBHFt; } goto mPLfK; d_qw2: $data["\163\155\x74\137\141\143\164\151\x76\145"] = $smt; goto Bc7DG; ILPC0: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto d_qw2; mPLfK: $data["\x73\x69\x73\x77\x61\x5f\x6b\145\154\141\x73\x5f\x62\x61\x72\165"] = $this->master->getSiswaKelasBaru($tp->id_tp, $smt->id_smt); goto VJJrW; uRdYq: $smt = $this->dashboard->getSemesterActive(); goto XVuSv; Gs3S0: $data = ["\x75\x73\x65\x72" => $user, "\152\x75\x64\x75\154" => "\113\x65\156\x61\x69\153\153\141\156\40\113\x65\x6c\141\x73", "\x73\x75\x62\x6a\x75\x64\x75\x6c" => "\x4e\x61\x69\x6b\40\x4b\x65\154\141\163\x20\123\x69\163\x77\141", "\x73\145\164\x74\x69\x6e\147" => $setting]; goto bUz7o; yfc8D: $data["\x6b\145\154\141\163\x65\163"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\x32", "\x3d" . ($lvlKls->level_id + 1)); goto QJxFk; VJJrW: $data["\x73\151\163\167\141\x73"] = $this->rapor->getKenaikanSiswa($kelas, $tp->id_tp - 1, "\62"); goto rj35_; ENLBT: $this->load->view("\x5f\x74\145\155\x70\154\141\164\x65\x73\x2f\x64\141\163\150\142\x6f\141\x72\x64\x2f\137\x68\x65\x61\144\x65\162", $data); goto nOaDU; uP7Qj: $level = $setting->jenjang == "\61" ? "\x36" : ($setting->jenjang == "\x32" ? "\71" : ($setting->jenjang == "\61" ? "\x33" : "\61\x32")); goto VFRmL; LuKHs: } public function naikKelas() { goto ABog5; XlZD2: E8jkO: goto M783K; XOqOB: $idkelases = []; goto TdSKM; ba25e: $data["\x72\x65\x73"] = $siswakelas; goto ZuOi7; ABog5: $tp = $this->dashboard->getTahunActive(); goto uVns_; v_Gk6: foreach ($idkelases as $ik) { goto xhT4S; p4E03: S6T_V: goto nlKUL; Fo1da: $jumlah = serialize($siswakelas[$ik]); goto y0JSi; n99ou: wIOzk: goto Q7drO; nlKUL: $data = array("\156\x61\x6d\x61\x5f\153\145\x6c\141\163" => $kelas->nama_kelas, "\x6b\x6f\144\145\x5f\x6b\x65\154\141\x73" => $kelas->kode_kelas, "\x6a\x75\162\x75\x73\141\x6e\x5f\x69\144" => $kelas->jurusan_id, "\x69\x64\x5f\164\160" => $tp->id_tp, "\151\144\x5f\163\x6d\x74" => $smt->id_smt, "\154\145\166\x65\154\x5f\x69\144" => $kelas->level_id, "\147\x75\162\x75\137\x69\144" => $kelas->guru_id, "\x73\x69\163\x77\141\x5f\x69\x64" => $kelas->siswa_id, "\152\165\x6d\x6c\x61\150\x5f\x73\151\x73\x77\x61" => $jumlah); goto TqahH; UDXAH: A2Wjs: goto a8D27; PZWJH: ECjm1: goto BQzqx; vByJV: sHQ4P: goto Fo1da; BQzqx: $jumlah = serialize($jmlLama); goto p4E03; yb7Zg: $jumlah = serialize($siswakelas[$ik]); goto nu14k; R3ds7: $this->db->insert("\155\141\163\164\x65\x72\137\153\145\x6c\141\x73", $data); goto nYjwA; s1Jyr: foreach ($siswakelas[$ik] as $s) { goto IAHhd; IAHhd: foreach ($jmlLama as $lama) { goto joi7c; ocIiK: Uowoo: goto xwQp1; aqWx1: array_push($jmlLama, ["\x69\x64" => $s["\x69\x64"]]); goto X9dkS; xwQp1: BkyhW: goto gqUdu; X9dkS: array_push($idks, $kelas_baru->id_kelas); goto ocIiK; joi7c: if (!($lama["\x69\x64"] != $s["\x69\144"])) { goto Uowoo; } goto aqWx1; gqUdu: } goto DTNLl; zONMI: lU47e: goto YgZ4x; DTNLl: CoCrG: goto zONMI; YgZ4x: } goto PZWJH; TqahH: $this->db->where("\x69\144\x5f\x6b\145\154\x61\x73", $kelas_baru->id_kelas); goto M18xb; wIPjk: goto wIOzk; goto vByJV; nu14k: array_push($idks, $kelas_baru->id_kelas); goto a3m4X; YXW87: ZoDPv: goto kibW2; nYjwA: array_push($idks, $this->db->insert_id()); goto n99ou; a3m4X: goto S6T_V; goto UDXAH; M18xb: $this->db->update("\x6d\141\x73\164\145\162\137\x6b\145\x6c\x61\163", $data); goto wIPjk; Qf7mS: if ($kelas_baru == null) { goto sHQ4P; } goto QnhoR; y0JSi: $data = array("\156\x61\x6d\x61\x5f\x6b\x65\154\x61\163" => $kelas->nama_kelas, "\153\157\144\145\137\153\145\154\x61\163" => $kelas->kode_kelas, "\x6a\x75\162\x75\x73\x61\x6e\x5f\x69\144" => $kelas->jurusan_id, "\151\144\x5f\164\x70" => $tp->id_tp, "\151\144\x5f\x73\155\x74" => $smt->id_smt, "\154\x65\x76\x65\154\137\x69\x64" => $kelas->level_id, "\147\x75\162\165\137\151\x64" => $kelas->guru_id, "\163\151\x73\x77\141\x5f\x69\144" => $kelas->siswa_id, "\x6a\165\155\x6c\x61\150\137\163\151\163\167\x61" => $jumlah); goto R3ds7; Q7drO: foreach ($idks as $idk) { goto nWwUx; MCrtC: Pd4V9: goto Fr1JL; Fr1JL: Dprm1: goto UXLUT; nWwUx: foreach ($siswakelas[$ik] as $s) { goto pIjih; hcMxF: $res[] = $this->db->replace("\153\145\154\x61\x73\x5f\x73\151\x73\x77\x61", $insert); goto Ccg_H; Ccg_H: XWAYa: goto sTROW; pIjih: $insert = ["\x69\144\x5f\153\x65\x6c\x61\163\x5f\163\x69\x73\167\141" => $tp->id_tp . $smt->id_smt . $s["\151\x64"], "\151\x64\137\164\160" => $tp->id_tp, "\x69\144\137\x73\x6d\x74" => $smt->id_smt, "\x69\144\x5f\x6b\145\x6c\141\x73" => $idk, "\151\x64\137\x73\x69\163\167\x61" => $s["\151\x64"]]; goto hcMxF; sTROW: } goto MCrtC; UXLUT: } goto moQiK; QnhoR: if ($mode == "\x70\145\162\x73\x69\x73\x77\x61") { goto A2Wjs; } goto yb7Zg; moQiK: QqNhy: goto YXW87; a8D27: $jmlLama = unserialize($kelas_baru->jumlah_siswa); goto s1Jyr; xhT4S: $kelas = $this->kelas->get_one($ik, $tp->id_tp - 1, "\x32"); goto FLftT; FLftT: $kelas_baru = $this->kelas->getKelasByNama($kelas->nama_kelas, $tp->id_tp, $smt->id_smt); goto Qf7mS; kibW2: } goto QwyP3; QwyP3: ysrRX: goto ba25e; fb0wi: $mode = $this->input->post("\x6d\157\144\x65", true); goto XOqOB; Bczq6: $idks = []; goto v_Gk6; uVns_: $smt = $this->dashboard->getSemesterActive(); goto u5div; TdSKM: $siswakelas = []; goto rNfz2; ZuOi7: $this->output_json($data); goto n4xGh; M783K: $idkelases = array_unique($idkelases); goto h3vDa; h3vDa: $res = []; goto Bczq6; rNfz2: foreach ($posts as $d) { goto ssPqp; zLAe9: $siswakelas[$d->kelas_baru][] = ["\151\x64" => $d->id_siswa]; goto tRd76; tRd76: ZLn7T: goto ICBHd; ssPqp: $idkelases[] = $d->kelas_baru; goto zLAe9; ICBHd: } goto XlZD2; u5div: $posts = json_decode($this->input->post("\x6b\x65\154\141\x73", true)); goto fb0wi; n4xGh: } public function hapus($id_kelas) { goto PpJzj; KyGgn: $this->output_json($delete); goto OfKtE; PpJzj: $delete["\163\x69\163\x77\141"] = $this->master->delete("\x6b\x65\x6c\x61\163\137\x73\x69\x73\167\x61", $id_kelas, "\x69\x64\x5f\153\x65\x6c\x61\x73"); goto l5OSX; l5OSX: $delete["\153\x65\x6c\x61\163"] = $this->master->delete("\155\x61\163\164\x65\x72\137\x6b\145\154\141\163", $id_kelas, "\151\x64\137\153\x65\x6c\x61\x73"); goto KyGgn; OfKtE: } }
