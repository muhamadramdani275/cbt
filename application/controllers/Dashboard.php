<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\105\120\x41\124\x48") or exit("\116\x6f\40\144\x69\x72\x65\x63\x74\x20\x73\143\x72\151\160\x74\40\x61\x63\x63\145\163\163\40\x61\154\154\157\167\x65\144"); class Dashboard extends CI_Controller { public function __construct() { goto Vcskw; I73h0: $this->load->model("\115\141\x73\164\145\162\x5f\155\157\x64\145\x6c", "\155\x61\163\x74\x65\162"); goto GkALj; uj__j: $this->load->model("\x4c\157\147\x5f\x6d\157\144\x65\154", "\x6c\x6f\147\147\x69\156\x67"); goto Pbt0z; Pbt0z: $this->load->model("\x44\x72\x6f\160\x64\157\167\156\137\x6d\x6f\x64\x65\154", "\x64\x72\x6f\x70\x64\x6f\167\156"); goto YfZk4; GkALj: $this->load->model("\x44\141\x73\x68\x62\157\141\162\144\137\155\x6f\144\x65\x6c", "\144\x61\x73\150\142\x6f\x61\x72\144"); goto uj__j; WgnQ8: if ($this->ion_auth->logged_in()) { goto hTkgR; } goto eXJid; Vcskw: parent::__construct(); goto WgnQ8; eXJid: redirect("\x61\165\164\x68"); goto tpEMT; tpEMT: hTkgR: goto I73h0; YfZk4: } public function admin_box() { goto YkyuW; aCizW: kGbWi: goto t3W_4; Ip_A4: $where = "\x6a\145\x6e\152\141\156\147\75\x30\x20\x4f\122\40\x6a\145\156\152\x61\x6e\x67\75\61"; goto ngb_W; altao: if ($setting->jenjang == "\x31") { goto Y_R3I; } goto iGhff; G157t: $info_box = json_decode(json_encode($box), FALSE); goto Ix16U; iGhff: if ($setting->jenjang == "\x32") { goto kGbWi; } goto yZ3oV; o7rFy: Y_R3I: goto Ip_A4; yZ3oV: goto FvQG6; goto o7rFy; t3W_4: $where = "\152\145\156\x6a\141\156\x67\x3d\x32\40\x4f\122\x20\x6a\145\156\x6a\141\x6e\147\x3d\61"; goto FJGGk; FJGGk: FvQG6: goto cVn0y; ngb_W: goto FvQG6; goto aCizW; YkyuW: $setting = $this->dashboard->getSetting(); goto y0b14; Ix16U: return $info_box; goto oNhNt; y0b14: $where = ''; goto altao; cVn0y: $box = [["\142\157\170" => "\142\154\165\145", "\164\157\x74\x61\x6c" => $this->dashboard->total("\x6d\141\x73\x74\x65\x72\x5f\x73\151\x73\167\x61"), "\x74\x69\164\154\145" => "\123\151\163\x77\141", "\x75\162\154" => "\144\141\x74\141\163\x69\163\167\141", "\151\x63\x6f\x6e" => "\x75\163\x65\x72\163"], ["\142\x6f\170" => "\x63\x79\x61\156", "\164\157\x74\x61\154" => $this->dashboard->total("\155\x61\163\164\145\x72\x5f\153\x65\154\x61\x73"), "\164\x69\x74\154\x65" => "\x52\x6f\x6d\x62\x65\x6c", "\x75\162\154" => "\144\x61\164\x61\153\145\x6c\x61\163", "\x69\143\x6f\x6e" => "\x62\x65\x6c\x6c"], ["\142\157\x78" => "\164\x65\x61\154", "\164\157\x74\141\154" => $this->dashboard->total("\x6d\141\163\164\145\x72\x5f\x67\x75\x72\x75"), "\164\151\x74\x6c\x65" => "\107\x75\x72\165", "\165\162\x6c" => "\x64\141\x74\x61\x67\x75\x72\x75", "\x69\143\x6f\x6e" => "\165\163\x65\162"], ["\142\x6f\x78" => "\x66\x75\143\150\x73\151\141", "\164\157\x74\x61\x6c" => $this->dashboard->totalWaliKelas(), "\164\x69\x74\154\x65" => "\127\141\x6c\151\x20\113\x65\154\x61\x73", "\165\162\154" => "\x64\x61\x74\x61\x67\x75\x72\x75", "\x69\x63\x6f\x6e" => "\165\x73\x65\x72"], ["\x62\157\170" => "\163\165\x63\x63\145\x73\x73", "\164\x6f\164\x61\154" => $this->dashboard->total("\155\141\163\x74\145\162\x5f\155\x61\160\x65\154", $where), "\164\151\164\154\x65" => "\x4d\x61\x70\x65\154", "\x75\x72\154" => "\x64\141\164\141\155\x61\160\145\154", "\x69\143\x6f\x6e" => "\142\x6f\157\x6b"], ["\142\x6f\170" => "\171\145\154\x6c\x6f\x77", "\x74\157\x74\x61\154" => $this->dashboard->total("\x6d\141\x73\164\x65\162\137\145\x6b\x73\x74\x72\x61"), "\x74\151\x74\x6c\145" => "\x45\x6b\x73\164\162\141\153\165\x72\151\x6b\x75\x6c\x65\162", "\165\162\154" => "\x64\141\x74\141\x65\x6b\163\x74\162\141", "\x69\143\157\x6e" => "\x62\157\157\153"]]; goto G157t; oNhNt: } public function guru_box() { goto cP4bX; heZNh: $where = "\x6a\x65\x6e\152\141\156\147\75\x32\x20\x4f\x52\x20\152\145\156\152\141\x6e\147\75\x31"; goto JvFya; cP4bX: $setting = $this->dashboard->getSetting(); goto Z1CpX; UAjmW: $where = "\152\x65\156\x6a\141\x6e\147\75\x30\40\x4f\x52\40\152\x65\x6e\152\x61\156\x67\x3d\x31"; goto zvrdL; btRj6: if ($setting->jenjang == "\61") { goto rOxU3; } goto wrexW; wrexW: if ($setting->jenjang == "\62") { goto dR0Wh; } goto K0_9J; Bt75E: dR0Wh: goto heZNh; qKoYB: return $info_box; goto C5jnl; zvrdL: goto DiBqd; goto Bt75E; Z1CpX: $where = ''; goto btRj6; qdLcp: rOxU3: goto UAjmW; eXpQd: $box = [["\142\x6f\170" => "\x74\145\141\154", "\x74\157\164\x61\x6c" => $this->dashboard->total("\x6d\x61\x73\164\x65\x72\137\153\x65\154\141\163"), "\x74\151\x74\x6c\145" => "\122\x6f\x6d\x62\145\154", "\151\x63\x6f\156" => "\165\163\145\x72"], ["\x62\157\x78" => "\142\154\165\x65", "\x74\157\164\141\154" => $this->dashboard->total("\x6d\x61\x73\164\145\x72\x5f\163\x69\x73\167\141"), "\164\151\x74\x6c\x65" => "\x53\151\x73\x77\x61", "\151\x63\157\x6e" => "\165\x73\x65\162\x73"], ["\x62\x6f\170" => "\x66\x75\x63\x68\x73\x69\141", "\x74\x6f\164\x61\x6c" => $this->dashboard->total("\x6d\141\x73\164\145\162\x5f\x67\165\x72\x75"), "\x74\151\x74\x6c\145" => "\107\165\162\165", "\151\143\x6f\x6e" => "\165\163\145\x72"], ["\x62\x6f\x78" => "\163\x75\x63\143\145\163\163", "\x74\x6f\x74\141\x6c" => $this->dashboard->total("\155\x61\163\x74\x65\x72\137\155\141\160\145\x6c", $where), "\164\x69\x74\x6c\145" => "\x4d\141\160\x65\x6c", "\x69\x63\157\x6e" => "\x62\157\157\x6b"]]; goto UNXFS; JvFya: DiBqd: goto eXpQd; K0_9J: goto DiBqd; goto qdLcp; UNXFS: $info_box = json_decode(json_encode($box), FALSE); goto qKoYB; C5jnl: } public function ujian_box() { goto ptENi; kPm9z: return $info_box; goto N2UGC; ptENi: $box = [["\142\x6f\170" => "\151\156\144\x69\147\157", "\164\x6f\164\x61\154" => $this->dashboard->total("\143\142\164\x5f\162\x75\141\x6e\x67"), "\164\x69\164\154\x65" => "\122\165\141\x6e\x67\x20\125\x6a\x69\141\156", "\x75\162\x6c" => "\x63\142\164\x72\165\141\156\147", "\151\x63\x6f\156" => "\x73\x63\x68\x6f\x6f\154"], ["\142\157\170" => "\x6d\141\x72\157\x6f\x6e", "\x74\157\164\141\x6c" => $this->dashboard->total("\143\x62\164\137\x73\x65\163\x69"), "\x74\151\x74\154\145" => "\x53\145\x73\151", "\165\162\154" => "\143\142\164\x73\x65\x73\151", "\151\143\157\x6e" => "\x63\154\157\143\x6b"], ["\142\x6f\x78" => "\147\x72\x65\x65\156", "\x74\157\164\141\154" => $this->dashboard->total("\x63\x62\164\137\x62\141\156\x6b\x5f\x73\x6f\x61\154"), "\164\x69\164\154\145" => "\102\141\156\153\x20\123\157\141\154", "\165\x72\154" => "\x63\x62\x74\142\x61\x6e\153\163\157\x61\154", "\x69\x63\x6f\156" => "\x66\157\154\144\145\x72"], ["\x62\157\170" => "\164\x65\141\154", "\x74\157\x74\141\154" => $this->dashboard->totalJadwal(), "\x74\x69\164\154\145" => "\x4a\141\x64\x77\141\154", "\x75\x72\154" => "\143\x62\164\152\x61\x64\167\141\154", "\151\x63\157\x6e" => "\x63\154\157\x63\x6b"]]; goto oW8LO; oW8LO: $info_box = json_decode(json_encode($box), FALSE); goto kPm9z; N2UGC: } public function menu_siswa_box() { goto kUGZj; l39Gc: $info_box = json_decode(json_encode($box), FALSE); goto TC652; kUGZj: $box = [["\x74\x69\164\154\145" => "\x4a\141\x64\167\x61\154\40\x50\145\154\x61\x6a\141\162\141\x6e", "\151\143\x6f\x6e" => "\151\143\137\157\x6e\x6c\x69\156\145\x2e\160\156\147", "\x6c\x69\x6e\153" => "\163\151\163\167\x61\57\x6a\141\x64\167\x61\154\x70\x65\x6c\x61\152\141\162\141\156"], ["\x74\151\164\x6c\145" => "\115\141\x74\x65\162\x69", "\x69\143\157\156" => "\151\143\137\x65\154\145\x61\x72\x6e\x69\156\x67\56\x70\x6e\147", "\x6c\x69\x6e\153" => "\x73\151\x73\x77\x61\x2f\x6d\x61\x74\x65\162\151"], ["\164\x69\x74\x6c\x65" => "\124\x75\147\x61\163", "\151\143\x6f\x6e" => "\151\x63\x5f\x71\165\x65\163\x74\151\157\x6e\x73\56\160\156\147", "\154\x69\156\153" => "\x73\x69\x73\x77\x61\57\x74\165\x67\x61\163"], ["\x74\x69\x74\x6c\x65" => "\x55\152\x69\x61\x6e\40\57\40\x55\154\x61\156\x67\141\156", "\151\143\x6f\x6e" => "\x69\x63\x5f\161\165\x65\163\164\151\157\x6e\56\x70\x6e\x67", "\154\x69\156\x6b" => "\163\151\163\167\141\x2f\x63\x62\x74"], ["\164\151\x74\154\x65" => "\x4e\x69\x6c\x61\151\x20\x48\141\x73\x69\x6c", "\151\143\x6f\x6e" => "\x69\x63\137\145\170\x61\x6d\56\x70\x6e\x67", "\154\x69\156\x6b" => "\x73\x69\163\167\141\57\x68\141\x73\x69\x6c"], ["\x74\x69\x74\x6c\x65" => "\101\142\163\x65\156\163\x69", "\151\x63\x6f\x6e" => "\151\143\x5f\143\154\151\x70\142\x6f\x61\x72\144\x2e\160\156\147", "\154\151\x6e\153" => "\163\x69\x73\167\x61\x2f\153\145\x68\x61\144\151\162\141\156"], ["\x74\x69\x74\x6c\145" => "\103\x61\164\141\164\x61\x6e\40\107\x75\x72\x75", "\151\x63\157\156" => "\x69\143\x5f\163\164\x75\x64\x65\x6e\164\x2e\160\x6e\147", "\154\151\156\153" => "\163\151\x73\167\x61\57\143\x61\x74\141\164\x61\156"]]; goto l39Gc; TC652: return $info_box; goto GcHbS; GcHbS: } public function index() { goto UEdKy; MzEMN: if ($this->ion_auth->in_group("\x73\151\163\x77\x61")) { goto lqjqh; } goto CMda0; ANeeq: goto FcBGZ; goto WlqI8; YT2Kv: foreach ($jadwal as $key => $item) { $arrJadwal[$item->id_kelas][$item->jam_ke] = $item; g1rfE: } goto quG87; CY8uU: $this->load->view("\x64\141\163\150\x62\157\x61\x72\144"); goto yS7qv; UF765: $kbms = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt); goto dLyYa; vZDdw: $jadwal = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, null, $day); goto UF765; QNOn2: $arrKbm = []; goto jbWXa; uQewn: $this->load->view("\155\145\155\142\145\x72\x73\57\x67\165\x72\165\57\144\141\163\x68\x62\157\x61\x72\144"); goto ptpq0; mxjUd: $user = $this->ion_auth->user()->row(); goto bp5JW; dLyYa: foreach ($kbms as $kbm) { $kbm->istirahat = unserialize($kbm->istirahat); FgXUq: } goto uIPoH; ZEDRd: $this->load->view("\155\145\155\142\145\162\x73\x2f\163\x69\163\167\141\x2f\164\x65\155\160\x6c\x61\164\x65\x73\57\146\157\x6f\x74\145\162"); goto dSf1x; abLQ8: $data["\152\141\x64\x77\141\x6c\x73"] = $arrJadwal; goto kb2Md; b9Si3: $data["\x73\x6d\164\x5f\x61\143\x74\151\166\x65"] = $smt; goto GcUXV; bp5JW: $data = ["\x75\x73\x65\162" => $user, "\x6a\165\x64\x75\154" => "\102\x65\162\x61\156\144\x61", "\163\165\142\152\165\144\165\154" => "\110\141\x6c\141\155\141\x6e\40\125\164\141\155\141", "\x73\x65\164\x74\151\x6e\147" => $setting]; goto ogwvv; uIPoH: Ez2Pz: goto NK22I; t2_JL: $data["\x6d\x65\156\165"] = $this->menu_siswa_box(); goto RHPT5; bHgmF: ttktX: goto qm65l; KJF7U: $data["\164\x70\x5f\x61\143\x74\151\166\145"] = $tp; goto bX0iN; GcUXV: if (!($tp != null)) { goto ttktX; } goto J1xzl; Hsndw: $this->load->view("\155\145\155\142\x65\162\163\57\163\x69\163\x77\141\57\x64\141\163\x68\x62\157\x61\162\144"); goto ZEDRd; GIIN9: $data["\x67\x75\162\x75"] = $guru; goto abLQ8; w5s4k: $this->load->view("\137\x74\145\155\x70\154\141\164\145\163\x2f\144\141\x73\x68\x62\157\141\x72\144\57\137\x68\145\141\144\x65\162", $data); goto CY8uU; LpH76: $data["\152\141\x64\x77\x61\154\x73"] = $arrJadwal; goto uE1HG; bF48R: $data["\164\160"] = $this->dashboard->getTahun(); goto KJF7U; weSXQ: goto FcBGZ; goto bRBDz; euPTM: $this->load->view("\155\145\x6d\x62\x65\162\x73\x2f\x73\151\x73\x77\x61\x2f\164\x65\x6d\x70\154\x61\164\x65\163\57\x68\x65\x61\x64\145\162", $data); goto Hsndw; Rf7jl: $data["\x70\162\157\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto LpH76; fON8D: $data["\162\165\x6e\x6e\151\156\x67\x5f\x74\145\170\x74"] = $this->dashboard->getRunningText(); goto euPTM; WlqI8: lqjqh: goto xefYZ; KuQuv: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto RLVwi; CMda0: goto FcBGZ; goto y6Uni; xsMeS: $data["\x73\x69\x73\x77\141"] = $siswa; goto t2_JL; bX0iN: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto b9Si3; MrWz4: $this->load->view("\155\145\x6d\142\145\162\x73\x2f\x67\x75\162\165\57\164\x65\155\160\x6c\141\164\x65\163\x2f\x68\145\x61\x64\145\x72", $data); goto uQewn; ptpq0: $this->load->view("\x6d\x65\155\142\x65\x72\x73\x2f\x67\x75\162\165\57\164\145\x6d\160\154\x61\x74\x65\163\x2f\146\x6f\157\x74\x65\162"); goto ANeeq; UEdKy: $setting = $this->dashboard->getSetting(); goto mxjUd; NK22I: $arrJadwal = []; goto YT2Kv; RHPT5: $data["\152\x61\x64\167\141\x6c\163"] = $jadwal; goto fON8D; ogwvv: $tp = $this->dashboard->getTahunActive(); goto OUT1T; J1xzl: $data["\x6b\145\x6c\x61\x73\145\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto bHgmF; uE1HG: $data["\x6b\x62\155\x73"] = $arrKbm; goto LmB0u; yS7qv: $this->load->view("\137\164\x65\155\160\154\141\164\145\x73\x2f\144\x61\x73\150\x62\x6f\141\162\144\57\x5f\146\x6f\157\x74\x65\x72"); goto weSXQ; y6Uni: ZzlGO: goto cEAr3; LMVRK: $data["\x6d\141\x70\x65\x6c\x73"] = $this->master->getAllMapel(); goto MrWz4; kb2Md: $data["\153\x62\x6d\x73"] = $arrKbm; goto LMVRK; LmB0u: $data["\x6d\141\160\x65\x6c\x73"] = $this->master->getAllMapel(); goto w5s4k; xefYZ: $siswa = $this->dashboard->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt); goto xsMeS; ZZ9IF: $data["\165\152\151\x61\156\137\142\x6f\170"] = $this->ujian_box(); goto GIIN9; RLVwi: $data["\151\x6e\146\157\x5f\142\157\170"] = $this->admin_box(); goto ZZ9IF; ArRKe: if ($this->ion_auth->is_admin()) { goto ZzlGO; } goto sXH0r; bRBDz: eNppm: goto KuQuv; cEAr3: $data["\151\156\146\x6f\x5f\142\x6f\170"] = $this->admin_box(); goto ciyhR; qm65l: $day = date("\x4e", strtotime(date("\x59\55\x6d\x2d\x64"))); goto vZDdw; JsUkl: ZZ7cP: goto ArRKe; OUT1T: $smt = $this->dashboard->getSemesterActive(); goto bF48R; ciyhR: $data["\165\x6a\151\x61\x6e\137\142\157\x78"] = $this->ujian_box(); goto Rf7jl; sXH0r: if ($this->ion_auth->in_group("\147\x75\x72\x75")) { goto eNppm; } goto MzEMN; jbWXa: foreach ($kbms as $key => $item) { $arrKbm[$item->id_kelas] = $item; K8liP: } goto JsUkl; dSf1x: FcBGZ: goto SIkHh; quG87: QFhaR: goto QNOn2; SIkHh: } public function output_json($data, $encode = true) { goto cBGxY; C7Ae7: $this->output->set_content_type("\141\160\160\154\151\143\141\x74\151\x6f\x6e\57\152\163\x6f\156")->set_output($data); goto pcO3j; Xq2BE: $data = json_encode($data); goto a1eze; cBGxY: if (!$encode) { goto YmnOo; } goto Xq2BE; a1eze: YmnOo: goto C7Ae7; pcO3j: } public function gantiTahun() { goto YvSoA; btGFJ: U_asi: goto r6xeI; Nmneg: $update[] = array("\x69\144\x5f\164\160" => $id_tp, "\x74\141\150\165\x6e" => $tahun, "\141\143\x74\151\166\x65" => $active); goto EaDfv; gQfBl: $tahun = $this->input->post("\x74\141\x68\165\156\x5b" . $i . "\135", true); goto wh8Ni; E39Bo: $i++; goto nLFEp; FOCSs: $i = 0; goto btGFJ; JUBmQ: $this->output_json($data); goto mOqWm; uedqA: goto EeFti; goto TWVoA; oGTR_: EeFti: goto Nmneg; r6xeI: if (!($i <= $rows)) { goto N_DU4; } goto zJsBV; ZqWGj: $this->dashboard->update("\x6d\141\x73\x74\x65\x72\137\164\x70", $update, "\x69\x64\x5f\164\x70", null, true); goto RxSdN; EaDfv: K09qP: goto E39Bo; c17Qu: $active = 0; goto uedqA; YvSoA: $aktif = $this->input->post("\141\143\164\151\x76\145", true); goto dun35; wh8Ni: if ($id_tp === $aktif) { goto Qc_G2; } goto c17Qu; c1aaM: $this->logging->saveLog(4, "\155\x65\x6e\x67\x67\x61\156\164\151\x20\x74\141\150\165\x6e\x20\x61\x6a\141\x72\x61\156\x20\x61\153\164\x69\146"); goto JUBmQ; DBGXl: $data["\x73\164\141\164\165\x73"] = true; goto c1aaM; BqDN8: $active = 1; goto oGTR_; RxSdN: $data["\165\x70\144\141\164\x65"] = $update; goto DBGXl; JCISc: N_DU4: goto ZqWGj; dun35: $rows = count($this->input->post("\164\x61\150\x75\156", true)); goto FOCSs; zJsBV: $id_tp = $this->input->post("\151\x64\137\164\160\133" . $i . "\135", true); goto gQfBl; TWVoA: Qc_G2: goto BqDN8; nLFEp: goto U_asi; goto JCISc; mOqWm: } public function gantiSemester() { goto mRHm2; qIczk: MaEwa: goto SVHIM; Mx3H_: $id_smt = $this->input->post("\151\x64\x5f\163\x6d\x74\x5b" . $i . "\135", true); goto u2w0Z; Lmwz4: $update[] = array("\x69\x64\137\x73\155\164" => $id_smt, "\163\155\x74" => $smt, "\x61\143\x74\x69\x76\145" => $active); goto I_QFe; e9_11: $this->dashboard->update("\x6d\x61\x73\164\145\162\x5f\x73\x6d\164", $update, "\x69\x64\x5f\x73\x6d\x74", null, true); goto pOQ29; VvXM9: $this->output_json($data); goto nmgxG; SVHIM: $active = 1; goto KQ1Nl; I7Ehw: if ($id_smt === $aktif) { goto MaEwa; } goto WkgnA; aPrH9: goto OMq0Z; goto GqIl9; mrNsf: goto au3IY; goto qIczk; SYy7U: if (!($i <= $rows)) { goto BF6p4; } goto Mx3H_; UF7V1: $i = 1; goto AKAoz; vMghx: $rows = count($this->input->post("\x73\155\x74", true)); goto UF7V1; AKAoz: OMq0Z: goto SYy7U; YWAai: $data["\x73\164\141\x74\x75\163"] = true; goto I2W4k; u2w0Z: $smt = $this->input->post("\x73\x6d\164\133" . $i . "\x5d", true); goto I7Ehw; I2W4k: $this->logging->saveLog(4, "\x6d\x65\x6e\147\x67\x61\156\x74\x69\x20\x73\x65\155\x65\163\x74\145\x72\x20\141\153\x74\x69\x66"); goto VvXM9; KQ1Nl: au3IY: goto Lmwz4; mRHm2: $aktif = $this->input->post("\141\x63\164\x69\x76\x65", true); goto vMghx; WkgnA: $active = 0; goto mrNsf; GqIl9: BF6p4: goto e9_11; I_QFe: vNoVL: goto zHY8n; pOQ29: $data["\165\160\x64\141\164\145"] = $update; goto YWAai; zHY8n: $i++; goto aPrH9; nmgxG: } public function getNotifikasi() { } public function getLog($limit) { $this->output_json($this->logging->loadAktifitas($limit)); } public function hapusLog() { goto aQSLx; ftsQ2: $deleted = ["\163\x74\141\x74\165\163" => true, "\x6d\x65\163\163\141\147\145" => "\x62\145\x72\150\x61\x73\151\154"]; goto w7TzE; ZQ6f8: if ($this->db->empty_table("\154\157\147")) { goto xC_Xw; } goto TCdo5; aQSLx: $this->db->trans_start(); goto ZQ6f8; M54ph: xC_Xw: goto ftsQ2; DlLm7: $this->output_json($deleted); goto RQXUN; i1bdQ: goto TjBG8; goto M54ph; f5FoH: $this->db->trans_complete(); goto DlLm7; w7TzE: TjBG8: goto f5FoH; TCdo5: $deleted = ["\163\164\x61\x74\x75\163" => false, "\x6d\x65\x73\163\x61\x67\x65" => "\x67\x61\147\141\154"]; goto i1bdQ; RQXUN: } public function getLogSiswa($limit) { $this->output_json($this->logging->loadAktifitasSiswa($limit)); } public function getPengumuman($for) { $this->output_json($this->dashboard->loadPengumuman($for)); } public function getJadwalHariIni($id_kelas, $id_hari) { goto YJt1D; VMkS1: $smt = $this->dashboard->getSemesterActive(); goto LMc75; YJt1D: $tp = $this->dashboard->getTahunActive(); goto VMkS1; LMc75: $this->output_json($this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $id_hari)); goto IUXpR; IUXpR: } public function getJadwalKbm($id_kelas) { goto AxJqW; mZgqz: $this->output_json(array("\x6a\x61\x64\167\141\x6c" => $jadwal, "\151\x73\164\x69\x72\141\x68\141\164" => $istirahat)); goto wJRhH; AxJqW: $tp = $this->dashboard->getTahunActive(); goto RxPxP; RxPxP: $smt = $this->dashboard->getSemesterActive(); goto R6PNt; R6PNt: $jadwal = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas); goto fryDs; fryDs: $istirahat = unserialize($jadwal->istirahat); goto mZgqz; wJRhH: } }
