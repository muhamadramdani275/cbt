<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtalokasi extends CI_Controller { public function __construct() { goto iMxSq; VEetv: AcIt1: goto ziHrf; ziHrf: $this->load->library(["\x64\x61\x74\141\164\x61\142\x6c\x65\x73", "\146\x6f\x72\155\x5f\x76\x61\x6c\x69\x64\141\164\x69\157\x6e"]); goto jEeLo; iMxSq: parent::__construct(); goto Guwh5; tRPGF: $this->load->model("\x43\x62\164\x5f\155\157\144\145\x6c", "\143\142\164"); goto VYlW2; AKr6M: $this->form_validation->set_error_delimiters('', ''); goto r1tGY; jEeLo: $this->load->model("\115\x61\163\x74\x65\x72\x5f\155\157\x64\x65\x6c", "\155\x61\x73\164\x65\x72"); goto GAwMv; kN1jz: Xfeoq: goto ntLRg; YR2AC: show_error("\110\141\156\x79\x61\40\x41\x64\155\151\156\151\163\164\162\x61\164\x6f\x72\40\x79\141\156\x67\40\144\x69\142\145\162\x69\x20\150\x61\x6b\40\x75\156\x74\x75\153\x20\155\x65\156\x67\x61\x6b\x73\x65\163\40\x68\x61\154\141\x6d\141\x6e\40\151\x6e\x69\54\x20\x3c\x61\x20\x68\x72\x65\x66\75\42" . base_url("\x64\141\x73\150\142\157\141\162\144") . "\x22\76\x4b\x65\x6d\x62\141\x6c\151\40\153\x65\x20\155\145\156\165\40\141\x77\141\x6c\74\57\x61\76", 403, "\101\153\163\145\x73\40\124\145\x72\154\141\162\141\x6e\x67"); goto kN1jz; YWNRS: $this->load->model("\104\x72\157\160\x64\157\x77\x6e\137\155\x6f\x64\x65\154", "\144\x72\x6f\160\144\157\x77\x6e"); goto AKr6M; GAwMv: $this->load->model("\104\x61\163\150\142\157\141\162\144\x5f\155\x6f\x64\x65\x6c", "\144\141\x73\x68\x62\157\x61\162\144"); goto tRPGF; eaMg_: udOiL: goto ZAB62; Guwh5: if (!$this->ion_auth->logged_in()) { goto udOiL; } goto HvwUd; ntLRg: goto AcIt1; goto eaMg_; ZAB62: redirect("\x61\x75\x74\x68"); goto VEetv; HvwUd: if ($this->ion_auth->is_admin()) { goto Xfeoq; } goto YR2AC; VYlW2: $this->load->model("\114\x6f\x67\137\x6d\157\144\x65\154", "\154\x6f\147\x67\x69\156\x67"); goto YWNRS; r1tGY: } public function output_json($data, $encode = true) { goto gL5Ag; G6VcK: $data = json_encode($data); goto cqgfP; gL5Ag: if (!$encode) { goto v2ab1; } goto G6VcK; VhPyC: $this->output->set_content_type("\141\160\x70\154\x69\x63\141\164\x69\157\156\x2f\x6a\x73\157\x6e")->set_output($data); goto nF28e; cqgfP: v2ab1: goto VhPyC; nF28e: } public function index() { goto eBxyC; dlP28: goto r8wgt; goto q6TOM; RH1IO: $data["\154\145\x76\x65\154\137\x73\145\154\145\x63\x74\x65\x64"] = $level_selected; goto Sg5DP; TDjtL: $filter_selected = $this->input->get("\146\151\154\164\x65\162", true); goto LhsiC; Me87d: $data["\163\x61\x6d\x70\141\151\x5f\163\x65\154\x65\x63\x74\x65\x64"] = $sampai_selected; goto HKonc; m5rmi: $data["\162\x75\141\x6e\147"] = $this->dropdown->getAllRuang(); goto f5_Dn; ly3AB: if ($setting->jenjang == "\x31") { goto Q9TT6; } goto r3uX3; bRsaQ: $data["\164\160\137\x61\143\164\x69\166\145"] = $tp; goto dyhSd; N3g40: $this->load->view("\x5f\164\x65\x6d\x70\154\141\164\x65\163\57\x64\141\163\x68\142\157\141\x72\144\57\x5f\x66\157\157\164\145\x72"); goto EMFDs; zoHFE: i8Gr_: goto qNd0n; Xc1wA: $ret = []; goto eBPN7; G2xum: r8wgt: goto VpAc3; WDyd9: GAR6U: goto n15QG; zxRMI: $this->load->view("\137\x74\x65\155\160\154\141\164\145\163\x2f\144\141\163\x68\x62\x6f\141\162\144\57\x5f\x68\145\141\x64\145\162", $data); goto LxWdM; bc3gj: $setting = $this->dashboard->getSetting(); goto hpW2C; qNd0n: $data["\x6a\x65\156\x69\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto z60W9; POEyW: goto r8wgt; goto m3C0f; nbj5q: $data["\x66\x69\x6c\164\145\162"] = ["\x30" => "\x53\x65\x6d\x75\x61", "\x31" => "\124\x61\x6e\147\x67\141\x6c"]; goto YbZT3; yIVwC: $data["\153\x65\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto m5rmi; e93J9: if (!(count($id_jenis) > 0)) { goto jJEOQ; } goto FHjrU; WTYZ3: $data["\163\x6d\164\137\141\x63\x74\x69\x76\x65"] = $smt; goto ZUL_1; eBxyC: $user = $this->ion_auth->user()->row(); goto bc3gj; E7WwS: $sampai_selected = $this->input->get("\x73\x61\x6d\160\141\151", true); goto nbj5q; yDeEg: $level_selected = $this->input->get("\154\145\x76\x65\154", true); goto TDjtL; HKonc: $jadwals = []; goto ZfQro; eBPN7: foreach ($jadwals as $key => $row) { goto U77ZA; oKi1x: array_push($ret[$row->tgl_mulai], $row); goto xdwCk; d3V5s: array_push($ret[$row->tgl_mulai], $row); goto W012l; xdwCk: FxZ0O: goto ybaGX; pjMWM: $ret[$row->tgl_mulai] = []; goto d3V5s; ybaGX: LIAcq: goto bMOz5; ImScp: v9cWR: goto oKi1x; W012l: goto FxZ0O; goto ImScp; U77ZA: if (isset($ret[$row->tgl_mulai])) { goto v9cWR; } goto pjMWM; bMOz5: } goto lL6Xe; VpAc3: $data["\154\x65\x76\x65\x6c\x73"] = $levels; goto Xc1wA; uzZyK: $levels = ["\x30" => "\x50\x69\x6c\151\x68\x20\x4c\x65\x76\x65\154", "\x31" => "\61", "\x32" => "\62", "\x33" => "\63", "\64" => "\64", "\x35" => "\x35", "\66" => "\x36"]; goto dlP28; UU_Hz: $data["\x64\x61\162\151\137\163\x65\x6c\x65\143\164\145\144"] = $dari_selected; goto Me87d; PsJHW: SG2CI: goto yIVwC; q6TOM: fIh_K: goto m4BdN; Sg5DP: $data["\x66\151\x6c\x74\145\162\137\163\x65\x6c\145\143\164\x65\x64"] = $filter_selected; goto UU_Hz; AQ_xa: $data["\x74\160"] = $this->dashboard->getTahun(); goto bRsaQ; ROLUX: goto sxGEE; goto zoHFE; B40Do: $smt = $this->dashboard->getSemesterActive(); goto AQ_xa; hpW2C: $data = ["\165\x73\145\162" => $user, "\x6a\x75\x64\x75\154" => "\101\x6c\157\x6b\141\163\x69\40\x57\141\x6b\164\165", "\x73\x75\142\152\165\144\165\x6c" => "\101\154\x6f\x6b\141\163\151\x20\x57\141\153\164\165\40\125\x6a\151\141\x6e", "\x73\x65\x74\x74\151\x6e\x67" => $setting]; goto hFKfg; FcGN6: $jenis_selected = $this->input->get("\152\x65\156\x69\163", true); goto yDeEg; lL6Xe: NUk1L: goto aLVyQ; YbZT3: $data["\152\145\x6e\x69\x73\x5f\x73\145\154\x65\143\x74\x65\x64"] = $jenis_selected; goto RH1IO; m3C0f: Q9TT6: goto uzZyK; LxWdM: $this->load->view("\x63\x62\164\x2f\x61\154\157\153\141\x73\151\57\144\141\x74\x61"); goto N3g40; z60W9: sxGEE: goto FcGN6; FHjrU: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); OmO2f: } goto WDyd9; EnPVx: $ids = []; goto e93J9; j9n8G: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, $level_selected, $dari_selected, $sampai_selected); goto PsJHW; LhsiC: $dari_selected = $this->input->get("\144\141\162\x69", true); goto E7WwS; aLVyQ: $data["\152\x61\x64\x77\x61\x6c\x73"] = $jadwals; goto tBF0j; m4BdN: $levels = ["\x30" => "\120\x69\154\151\150\x20\114\x65\x76\145\154", "\67" => "\67", "\70" => "\x38", "\x39" => "\x39"]; goto pMXqQ; laE3s: if ($setting->jenjang == "\63") { goto a5SQF; } goto POEyW; hFKfg: $tp = $this->dashboard->getTahunActive(); goto B40Do; EwHhs: $levels = ["\60" => "\120\x69\x6c\151\150\x20\x4c\145\166\x65\154", "\x31\x30" => "\x31\x30", "\x31\x31" => "\x31\61", "\x31\62" => "\61\x32"]; goto G2xum; f5_Dn: $levels = []; goto ly3AB; tBF0j: $data["\160\162\157\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto zxRMI; r3uX3: if ($setting->jenjang == "\x32") { goto fIh_K; } goto laE3s; E1cPX: if (count($ids) > 0) { goto i8Gr_; } goto OZxVn; dyhSd: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto WTYZ3; ZfQro: if (!($jenis_selected != null && $level_selected != null)) { goto SG2CI; } goto j9n8G; pMXqQ: goto r8wgt; goto D2yE7; ZUL_1: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto EnPVx; D2yE7: a5SQF: goto EwHhs; OZxVn: $data["\152\145\156\x69\163"] = ['' => "\142\x65\154\x75\155\x20\141\x64\141\40\152\141\144\x77\x61\154\40\x75\152\151\x61\156"]; goto ROLUX; n15QG: jJEOQ: goto E1cPX; EMFDs: } public function saveAlokasi() { goto PehPA; ICOTN: $insert = []; goto pYLl0; FNTu4: $this->output_json($data); goto kgL7G; pYLl0: foreach ($input as $d) { goto SpDeM; cWLPw: CPSoQ: goto FusXk; SpDeM: if (!($d->id_jadwal != "\60")) { goto CPSoQ; } goto gcE8O; gcE8O: array_push($insert, ["\x69\x64\137\x6a\x61\144\167\x61\154" => $d->id_jadwal, "\x6a\141\x6d\x5f\153\x65" => $d->jam_ke]); goto cWLPw; FusXk: yxrpX: goto QyPUy; QyPUy: } goto fJ12X; YK4Xi: $data["\163\x74\141\x74\165\163"] = $update; goto FNTu4; Rqlg4: $update = $this->db->update_batch("\x63\x62\x74\137\152\141\x64\167\x61\x6c", $insert, "\x69\x64\137\x6a\x61\144\x77\141\x6c"); goto YK4Xi; PehPA: $input = json_decode($this->input->post("\x61\154\x6f\x6b\141\x73\151", true)); goto ICOTN; fJ12X: v31xp: goto Rqlg4; kgL7G: } }
