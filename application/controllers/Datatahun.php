<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\x53\x45\120\x41\124\110") or exit("\116\157\x20\x64\151\162\x65\x63\164\x20\x73\x63\162\151\x70\x74\40\141\x63\x63\145\163\x73\40\141\x6c\x6c\x6f\167\x65\144"); class Datatahun extends CI_Controller { public function __construct() { goto ZRO1K; d6Jaa: goto oa1OB; goto Gparp; u29XX: $this->load->library(["\x64\141\x74\x61\x74\141\x62\x6c\145\163", "\146\x6f\162\x6d\x5f\166\x61\154\151\x64\x61\164\x69\x6f\156"]); goto aDm0V; jFMRa: oa1OB: goto u29XX; hQoLj: $this->load->model("\x4c\x6f\x67\137\x6d\x6f\x64\145\154", "\154\157\147\147\x69\156\147"); goto Mz_Ow; AEnQ4: redirect("\x61\x75\x74\150"); goto jFMRa; HWhis: if (!$this->ion_auth->logged_in()) { goto hf7TN; } goto AzTzw; nHXKZ: o1pmA: goto d6Jaa; Gparp: hf7TN: goto AEnQ4; AzTzw: if ($this->ion_auth->is_admin()) { goto o1pmA; } goto uwgCQ; Mz_Ow: $this->form_validation->set_error_delimiters('', ''); goto pjQv8; uwgCQ: show_error("\110\x61\x6e\171\141\40\x41\x64\155\151\x6e\x69\x73\164\x72\141\164\157\x72\x20\171\x61\156\x67\40\x64\x69\x62\x65\x72\151\40\150\141\x6b\40\x75\x6e\164\x75\153\40\x6d\x65\156\147\x61\x6b\163\145\x73\40\150\141\154\141\x6d\141\156\40\151\156\x69\x2c\x20\x3c\141\x20\150\x72\x65\x66\x3d\42" . base_url("\144\141\x73\x68\142\x6f\x61\162\x64") . "\42\76\x4b\x65\x6d\142\141\154\x69\x20\x6b\145\40\x6d\145\156\165\40\x61\x77\141\154\x3c\x2f\141\76", 403, "\101\153\x73\145\163\40\124\145\162\154\x61\x72\x61\156\147"); goto nHXKZ; ZRO1K: parent::__construct(); goto HWhis; oxnEK: $this->load->model("\104\141\163\x68\142\157\141\x72\144\137\x6d\157\144\x65\154", "\144\141\x73\x68\x62\157\x61\162\144"); goto hQoLj; aDm0V: $this->load->model("\115\141\x73\x74\145\x72\x5f\155\x6f\x64\x65\154", "\155\141\x73\164\x65\x72"); goto oxnEK; pjQv8: } public function output_json($data, $encode = true) { goto zmBZc; FmwkT: $data = json_encode($data); goto cjB3L; cjB3L: IlcEY: goto JJcY5; zmBZc: if (!$encode) { goto IlcEY; } goto FmwkT; JJcY5: $this->output->set_content_type("\x61\160\160\x6c\151\x63\x61\x74\x69\x6f\x6e\57\152\x73\157\x6e")->set_output($data); goto mOM3r; mOM3r: } public function index() { goto KAVcJ; y3pv2: $data = ["\x75\163\145\x72" => $user, "\152\165\x64\165\x6c" => "\105\144\x69\164\x20\124\x61\150\165\156\x20\120\145\x6c\141\x6a\x61\162\141\156\40\144\x61\x6e\x20\123\x65\x6d\145\x73\x74\145\162", "\x73\x75\x62\152\x75\x64\165\154" => "\x54\x61\150\165\x6e\40\x50\145\154\x61\152\141\x72\141\156\40\x64\x61\156\40\x53\x65\155\145\163\164\145\162", "\x70\162\x6f\146\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto stuQY; X10Fc: $data["\x6a\155\x6c\x5f\150\x61\162\151"] = $jml == null ? "\x30" : $jml->jml_hari_efektif; goto Aedwz; k2XED: $this->load->view("\x6d\x61\163\164\145\162\x2f\164\141\150\165\x6e\57\x64\x61\x74\141"); goto sHaNN; stuQY: $tp = $this->dashboard->getTahunActive(); goto tH1Dv; wsUcT: $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt); goto X10Fc; LDZEt: $data["\164\x70\137\141\143\x74\x69\x76\x65"] = $tp; goto qHM26; qHM26: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto N5Xbr; KAVcJ: $user = $this->ion_auth->user()->row(); goto y3pv2; sHaNN: $this->load->view("\137\x74\x65\155\160\154\141\x74\x65\163\x2f\x64\x61\163\150\142\157\x61\162\x64\x2f\x5f\146\x6f\157\164\145\162"); goto eP0Q_; tH1Dv: $smt = $this->dashboard->getSemesterActive(); goto c1Xh8; N5Xbr: $data["\x73\x6d\x74\x5f\x61\143\164\x69\x76\145"] = $smt; goto wsUcT; c1Xh8: $data["\x74\x70"] = $this->dashboard->getTahun(); goto LDZEt; Aedwz: $this->load->view("\137\x74\x65\155\160\154\x61\x74\145\x73\x2f\x64\x61\x73\x68\142\x6f\141\162\x64\x2f\x5f\x68\145\x61\x64\x65\x72", $data); goto k2XED; eP0Q_: } public function data() { $this->output_json($this->dashboard->getDataTahun(), false); } public function gantiTahun() { goto jFuw2; bl90n: $this->output_json($data); goto X91Uw; mRrNa: $data["\x73\164\141\164\165\163"] = true; goto xGy11; jFuw2: $aktif = $this->input->post("\x61\x63\x74\x69\166\145", true); goto pzooW; M0RB3: $this->dashboard->update("\x6d\141\163\x74\x65\x72\137\164\160", $update, "\151\144\137\x74\160", null, true); goto xp2wN; xp2wN: $data["\155\163\x67"] = "\115\x65\x72\165\x62\141\x68\x20\x54\x61\x68\165\156\40\x41\x6b\x74\151\146"; goto W1k2A; pzooW: $inputTp = json_decode($this->input->post("\x74\141\150\x75\156", false)); goto OBBo2; zHjuE: Cq6f3: goto M0RB3; OBBo2: foreach ($inputTp as $tps) { goto uJ2gS; C71X4: $active = 1; goto tiORk; yvvYA: $active = 0; goto bbmKu; uJ2gS: $id_tp = $tps->id; goto dVX21; AA4KA: if ($id_tp === $aktif) { goto rhzSu; } goto yvvYA; iMfed: rhzSu: goto C71X4; tT0d9: $update[] = array("\x69\144\x5f\164\160" => $id_tp, "\x74\x61\150\x75\156" => $tahun, "\x61\x63\x74\x69\x76\x65" => $active); goto VyXrB; tiORk: B6JnX: goto tT0d9; VyXrB: h7tMJ: goto D2_cm; bbmKu: goto B6JnX; goto iMfed; dVX21: $tahun = $tps->tp; goto AA4KA; D2_cm: } goto zHjuE; W1k2A: $data["\x75\160\x64\141\164\145"] = $update; goto mRrNa; xGy11: $this->logging->saveLog(4, "\155\x65\156\147\147\141\156\x74\x69\40\164\x61\150\165\x6e\40\141\x6a\141\x72\x61\x6e\40\141\x6b\x74\x69\x66"); goto bl90n; X91Uw: } public function gantiSemester() { goto sjMjw; EuHBc: Ge9bW: goto RzHph; DMr0j: foreach ($inputSmt as $tps) { goto HAVEp; DMeD0: v5CJW: goto MI2J7; DMrSH: $smt = $tps->Semester; goto F48pF; a1wio: goto vp5u6; goto DMeD0; MI2J7: $active = 1; goto bb5pw; AqixB: I7Er9: goto g7Xh2; F48pF: if ($id_smt === $aktif) { goto v5CJW; } goto tJNrZ; tJNrZ: $active = 0; goto a1wio; bb5pw: vp5u6: goto U2F2U; U2F2U: $update[] = array("\151\144\x5f\163\155\x74" => $id_smt, "\x73\155\x74" => $smt, "\141\143\x74\151\166\145" => $active); goto AqixB; HAVEp: $id_smt = $tps->id; goto DMrSH; g7Xh2: } goto EuHBc; sjMjw: $aktif = $this->input->post("\x61\x63\x74\151\x76\x65", true); goto zWxPF; znjq5: $this->logging->saveLog(4, "\155\145\156\x67\147\141\156\x74\x69\x20\x73\145\155\x65\163\x74\x65\x72\40\x61\x6b\x74\x69\x66"); goto A_LbG; zWxPF: $inputSmt = json_decode($this->input->post("\163\x65\155\145\x73\164\x65\162", false)); goto DMr0j; Y2VOp: $data["\155\163\147"] = "\115\x65\162\x75\142\141\150\x20\123\145\x6d\145\x73\x74\x65\x72\40\x41\153\164\x69\146"; goto dXxyp; RzHph: $this->dashboard->update("\155\x61\x73\x74\145\x72\x5f\163\155\x74", $update, "\x69\144\x5f\x73\x6d\164", null, true); goto Y2VOp; dXxyp: $data["\165\x70\144\141\164\x65"] = $update; goto yo_hV; yo_hV: $data["\163\164\141\164\x75\x73"] = true; goto znjq5; A_LbG: $this->output_json($data); goto TpS1g; TpS1g: } public function add() { goto NZeKN; wETav: $id = $this->input->post("\x69\x64\137\x74\x61\150\x75\x6e", true); goto WCTXh; NZeKN: $method = $this->input->post("\155\145\x74\150\x6f\x64", true); goto i_0yD; WCTXh: $update = array("\151\144\x5f\x74\x70" => $id, "\x74\x61\x68\165\156" => $tahun); goto wZAcs; i_0yD: $tahun = $this->input->post("\x74\141\x68\165\156", true); goto Gq9DM; wZAcs: $data = $this->master->update("\155\x61\x73\164\145\x72\x5f\164\x70", $update, "\151\144\137\x74\160", $id); goto NENFX; oii1v: Vj1hM: goto tQYCj; BFVxT: $this->output->set_content_type("\141\x70\160\154\x69\x63\141\164\151\157\x6e\x2f\x6a\163\157\156")->set_output($data); goto L4tG4; tQYCj: $insert = ["\x74\141\x68\165\156" => $tahun]; goto rqLi6; rqLi6: $data = $this->master->create("\155\141\x73\164\x65\162\137\x74\160", $insert); goto rH0nt; rH0nt: $this->logging->saveLog(3, "\155\x65\156\x61\155\142\141\x68\40\164\141\x68\165\x6e\x20\160\x65\x6c\x61\x6a\141\162\141\156"); goto uFoPA; NENFX: $this->logging->saveLog(4, "\155\145\156\x67\x65\144\151\164\x20\164\x61\150\x75\156\40\160\x65\x6c\141\152\x61\162\141\156"); goto pyT5t; pyT5t: goto KoKry; goto oii1v; uFoPA: KoKry: goto BFVxT; Gq9DM: if ($method === "\141\144\144") { goto Vj1hM; } goto wETav; L4tG4: } public function saveHariEfektif() { goto HHDKB; WUTTb: $data["\163\x74\x61\x74\x75\x73"] = $update; goto Z0qB7; vH8LF: $update = $this->db->replace("\x6d\x61\163\x74\x65\162\137\150\x61\x72\x69\x5f\x65\x66\145\153\x74\151\x66", $input); goto WUTTb; Z0qB7: $this->output_json($data); goto hHA8z; HHDKB: $tp = $this->dashboard->getTahunActive(); goto i1nGM; BWxKR: $input = ["\151\x64\x5f\x68\141\x72\151\x5f\145\146\x65\x6b\x74\151\146" => $tp->id_tp . $smt->id_smt, "\152\155\x6c\x5f\x68\x61\162\x69\x5f\145\x66\x65\x6b\x74\x69\146" => $this->input->post("\152\x6d\x6c\137\150\141\x72\151", true)]; goto vH8LF; i1nGM: $smt = $this->dashboard->getSemesterActive(); goto BWxKR; hHA8z: } public function hapusTahun() { goto iPgoD; zZIcz: $this->output_json($data); goto S2BQO; iPgoD: $id = $this->input->post("\150\x61\x70\x75\x73", true); goto HuZ6x; HuZ6x: if ($this->dashboard->hapus("\x6d\141\163\164\145\x72\x5f\x74\160", $id, "\151\x64\x5f\164\x70")) { goto IvLMv; } goto ahpW0; nzFd2: goto Az6Z0; goto vq7mc; vq7mc: IvLMv: goto gn2pS; aqzfw: $data["\155\x73\x67"] = "\x4d\x65\x6e\147\150\141\x70\x75\x73\x20\x54\141\150\x75\156\40\x50\x65\x6c\141\x6a\x61\162\141\x6e"; goto zZIcz; rJ6_K: Az6Z0: goto aqzfw; Fh_eT: $data["\x73\x74\141\x74\x75\x73"] = true; goto rJ6_K; gn2pS: $this->logging->saveLog(5, "\x6d\145\x6e\147\x68\x61\x70\165\163\40\164\x61\150\165\x6e\x20\160\145\x6c\141\152\x61\x72\141\x6e"); goto Fh_eT; ahpW0: $data["\163\x74\141\164\165\x73"] = false; goto nzFd2; S2BQO: } public function hapus() { goto nq0sq; UnXY8: m6FfK: goto oD9kS; R8xhY: goto VRDv2; goto UnXY8; Dbvi3: $this->output_json(["\163\x74\141\x74\165\x73" => true, "\x74\x6f\164\141\154" => count($chk)]); goto my2sm; Mm6IM: $this->logging->saveLog(5, "\x6d\x65\x6e\147\x68\x61\x70\165\163\40\164\x61\150\165\x6e\40\160\x65\x6c\141\152\141\162\141\156"); goto Dbvi3; pbFjc: VRDv2: goto du3zE; oD9kS: $this->output_json(["\163\164\x61\164\165\x73" => false]); goto pbFjc; G4bXL: if (!$chk) { goto m6FfK; } goto W_ttF; nq0sq: $chk = $this->input->post("\x63\150\145\x63\153\145\x64", true); goto G4bXL; my2sm: GuYQt: goto R8xhY; W_ttF: if (!$this->dashboard->hapus("\155\141\163\164\145\x72\x5f\x74\160", $chk, "\151\144\x5f\x74\160")) { goto GuYQt; } goto Mm6IM; du3zE: } }
