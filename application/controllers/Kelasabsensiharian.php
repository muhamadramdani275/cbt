<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensiharian extends CI_Controller { public function __construct() { goto tQHiB; tQHiB: parent::__construct(); goto oRz_h; oIEnG: $this->load->model("\104\141\x73\150\x62\157\141\x72\144\x5f\x6d\157\144\145\x6c", "\144\141\x73\150\x62\157\141\162\x64"); goto OKNP4; QeDwL: k9LK9: goto Tt58o; MxnI6: Xajjc: goto D0a9e; HfWDu: $this->load->model("\115\141\163\164\145\162\137\155\x6f\x64\x65\154", "\x6d\x61\x73\164\x65\162"); goto oIEnG; Tt58o: goto wgEwz; goto MxnI6; OKNP4: $this->load->model("\x44\162\157\160\x64\x6f\167\156\x5f\x6d\x6f\144\x65\154", "\x64\x72\157\x70\x64\157\167\156"); goto a0l9y; oRz_h: if (!$this->ion_auth->logged_in()) { goto Xajjc; } goto sXm8p; q653a: $this->load->library(["\x64\x61\x74\x61\x74\x61\142\x6c\145\x73", "\146\157\162\155\137\166\141\154\x69\144\x61\x74\151\x6f\156"]); goto HfWDu; Ub_Te: $this->form_validation->set_error_delimiters('', ''); goto cIxFC; wfEOK: show_error("\110\x61\156\x79\x61\40\101\144\x6d\x69\x6e\x69\x73\x74\162\141\x74\157\x72\40\x79\141\156\x67\x20\x64\x69\x62\145\x72\151\x20\x68\141\153\40\165\156\164\x75\x6b\x20\x6d\x65\156\x67\141\153\x73\x65\163\x20\150\x61\154\x61\x6d\141\156\x20\151\156\x69\54\40\74\141\x20\150\162\145\146\75\42" . base_url("\144\141\x73\x68\x62\x6f\x61\162\x64") . "\x22\x3e\x4b\145\155\x62\x61\x6c\x69\x20\153\x65\x20\x6d\x65\x6e\165\x20\141\167\x61\x6c\74\57\x61\x3e", 403, "\101\153\x73\x65\163\x20\x54\145\162\x6c\141\x72\141\156\x67"); goto QeDwL; D0a9e: redirect("\x61\165\x74\150"); goto WqZmz; WqZmz: wgEwz: goto q653a; sXm8p: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\x75"))) { goto k9LK9; } goto wfEOK; a0l9y: $this->load->model("\113\x65\154\x61\163\x5f\155\157\144\145\154", "\153\x65\x6c\x61\163"); goto Ub_Te; cIxFC: } public function output_json($data, $encode = true) { goto FfIec; FfIec: if (!$encode) { goto BGJ7V; } goto X0zCU; X0zCU: $data = json_encode($data); goto sWKvK; x1E7F: $this->output->set_content_type("\x61\160\160\x6c\151\143\x61\x74\151\x6f\x6e\57\152\x73\157\x6e")->set_output($data); goto xEWAv; sWKvK: BGJ7V: goto x1E7F; xEWAv: } public function index() { goto KnyVW; m4M17: $data["\147\165\162\165"] = $guru; goto d0YUy; NvTuF: $this->load->view("\x5f\x74\145\155\x70\154\141\x74\x65\163\57\x64\x61\x73\150\x62\x6f\x61\162\x64\x2f\x5f\146\x6f\x6f\x74\x65\x72"); goto c5ZkP; vQLx9: goto v7CvT; goto mLeDd; d0YUy: $data["\x69\x64\137\147\x75\x72\x75"] = $guru->id_guru; goto aqkap; mIWyg: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto GRjwj; KnyVW: $user = $this->ion_auth->user()->row(); goto nJTn0; xqPeV: $this->load->view("\x6d\x65\x6d\x62\145\162\163\57\147\x75\162\x75\57\x74\145\x6d\x70\154\x61\x74\145\163\x2f\x66\x6f\157\x74\145\x72"); goto vQLx9; qy4dP: $this->load->view("\137\x74\x65\155\x70\154\x61\x74\x65\163\x2f\x64\x61\163\x68\142\157\141\162\144\57\x5f\x68\x65\141\144\x65\162", $data); goto YBkIL; y5QGq: $data["\x74\160"] = $this->dashboard->getTahun(); goto K9_b1; YBkIL: $this->load->view("\x6b\x65\x6c\141\163\57\141\x62\163\x65\x6e\150\141\162\151\x61\156\57\x64\141\x74\x61"); goto NvTuF; GRjwj: $nguru[$guru->id_guru] = $guru->nama_guru; goto m4M17; aqkap: $this->load->view("\x6d\x65\x6d\x62\x65\x72\163\57\x67\x75\x72\x75\57\164\145\x6d\160\154\x61\164\x65\x73\x2f\x68\x65\x61\144\145\162", $data); goto SiNcG; PQCIf: $smt = $this->master->getSemesterActive(); goto y5QGq; SiNcG: $this->load->view("\153\x65\154\x61\163\57\x61\142\163\x65\156\150\141\x72\151\141\156\x2f\x64\x61\164\x61"); goto xqPeV; Mi2ED: if ($this->ion_auth->is_admin()) { goto db6BF; } goto mIWyg; mLeDd: db6BF: goto sKQ5C; HPRBh: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto fDG13; fDG13: $data["\x73\x6d\164\137\141\143\x74\151\166\x65"] = $smt; goto zVWxV; zVWxV: $data["\153\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto GNx4i; sKQ5C: $data["\160\x72\x6f\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto WPwTz; cpjEJ: $tp = $this->master->getTahunActive(); goto PQCIf; GNx4i: $data["\155\x61\160\145\x6c"] = $this->dropdown->getAllMapel(); goto Mi2ED; WPwTz: $data["\147\x75\x72\165"] = $this->dropdown->getAllGuru(); goto qy4dP; K9_b1: $data["\164\160\x5f\141\143\164\x69\166\x65"] = $tp; goto HPRBh; c5ZkP: v7CvT: goto Armcd; nJTn0: $data = ["\165\x73\145\162" => $user, "\x6a\x75\x64\165\x6c" => "\x4b\145\150\x61\x64\162\151\141\156\x20\110\141\x72\151\141\156\x20\x53\x69\163\x77\141", "\163\x75\142\152\x75\x64\165\154" => "\104\x61\x74\141\40\x4b\x65\x68\141\x64\151\x72\141\x6e\40\x53\151\x73\167\141", "\163\145\164\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto cpjEJ; Armcd: } public function loadAbsensi() { goto kw36i; vPXd3: $jadwal_materi = []; goto O5asX; O5asX: if (!(count($arrIdMapel) > 0)) { goto S1aiE; } goto xU1JE; GZtAd: IwoXJ: goto JUcVC; bEWv7: if ($info != null) { goto n_c0a; } goto X_12l; JUcVC: $this->output_json(array("\x6c\157\x67" => $log, "\151\156\x66\157" => $info, "\152\x61\144\167\141\x6c" => $jadwal, "\155\x61\164\x65\x72\x69" => $jadwal_materi, "\151\x73\x74\x69\x72\141\x68\x61\x74" => $istirahat)); goto ozCx1; gxwf6: $jadwal = $this->dashboard->loadJadwalHariIni($id_tp, $id_smt, $id_kelas, $hari); goto yCeBl; DQ0YT: foreach ($jadwal_materi as $jmtr) { goto aBxao; dKv06: MDiBP: goto Uy0oS; aBxao: foreach ($jmtr as $jam) { goto EZe25; EZe25: foreach ($jam as $jns) { array_push($arrIdKjm, $jns->id_kjm); vB1iL: } goto MTiUI; QwK9q: I9IUq: goto FySFI; MTiUI: GNpKK: goto QwK9q; FySFI: } goto kBJD2; kBJD2: DlvDR: goto dKv06; Uy0oS: } goto dMzCA; TtVZQ: $bulan = $this->input->post("\142\x6c\x6e", true); goto aQ2xq; dMzCA: hFNbf: goto Y1M9_; vmPll: n_c0a: goto kuP27; Acdxk: Fc4M3: goto gxwf6; dBeU3: oxwre: goto GZtAd; uoUFg: $info = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto bEWv7; IsoyQ: xi8qr: goto vPXd3; hBK0v: $arrIdKjm = []; goto DQ0YT; X_12l: $istirahat = []; goto l6o8e; C6H7D: $log = []; goto zGecS; CcR0O: $id_tp = $this->master->getTahunActive()->id_tp; goto MXlMG; l6o8e: goto Fc4M3; goto vmPll; zGecS: if (!($info != null)) { goto IwoXJ; } goto ZRuV_; yCeBl: $arrIdMapel = []; goto nAjoD; bsg9k: S1aiE: goto hBK0v; HqUWT: $tahun = $this->input->post("\164\150\156", true); goto TtVZQ; ZRuV_: foreach ($siswa as $s) { goto LCn67; LmJIR: $status = []; goto qVI7v; trC67: $log[$s->id_siswa] = ["\156\141\x6d\141" => $s->nama, "\156\151\163" => $s->nis, "\x6b\145\154\x61\163" => $s->nama_kelas, "\163\x74\x61\164\x75\x73" => $status]; goto jWszw; g2bif: R833y: goto trC67; jWszw: omBUR: goto ZSSD2; LCn67: $status_materi = $this->kelas->getRekapStatusMateri($s->id_siswa, $arrIdKjm); goto LmJIR; qVI7v: foreach ($status_materi as $stat) { $status[$stat->jam_ke][$stat->id_mapel][$stat->jenis] = $stat; Zs3Jn: } goto g2bif; ZSSD2: } goto dBeU3; kuP27: $istirahat = unserialize($info->istirahat); goto Acdxk; kw36i: $id_kelas = $this->input->post("\153\145\154\x61\x73", true); goto HqUWT; Y1M9_: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto C6H7D; aQ2xq: $tanggal = $this->input->post("\x74\x67\x6c", true); goto cQCin; nAjoD: foreach ($jadwal as $jd) { array_push($arrIdMapel, $jd->id_mapel); heM2y: } goto IsoyQ; cQCin: $hari = $this->input->post("\x68\141\x72\x69", true); goto CcR0O; MXlMG: $id_smt = $this->master->getSemesterActive()->id_smt; goto uoUFg; xU1JE: $jadwal_materi = $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\55" . $bulan . "\x2d" . $tanggal, $arrIdMapel); goto bsg9k; ozCx1: } }
