<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensibulanan extends CI_Controller { public function __construct() { goto bNo2Q; WE4Lq: if (!$this->ion_auth->logged_in()) { goto ztBMj; } goto q2N46; Nt7F9: $this->load->model("\x44\x72\x6f\160\x64\157\167\156\137\x6d\x6f\144\x65\x6c", "\x64\x72\157\160\x64\x6f\x77\x6e"); goto Louax; Louax: $this->load->model("\113\145\154\x61\163\137\x6d\157\144\145\154", "\153\145\154\x61\163"); goto sTHVM; sjEF3: $this->load->library(["\144\141\x74\141\x74\x61\142\154\x65\x73", "\146\x6f\x72\155\x5f\x76\x61\154\x69\x64\141\164\151\x6f\x6e"]); goto N9UcH; N7mWW: b_Lqe: goto sjEF3; q2N46: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) { goto SCGhw; } goto cWRyA; ah4jX: $this->load->model("\x44\x61\x73\x68\x62\x6f\x61\162\x64\x5f\x6d\x6f\x64\145\x6c", "\144\x61\163\x68\142\x6f\x61\162\x64"); goto Nt7F9; bNo2Q: parent::__construct(); goto WE4Lq; cWRyA: show_error("\x48\x61\x6e\x79\141\x20\x41\144\x6d\x69\156\x69\163\x74\x72\x61\x74\157\x72\x20\x79\141\156\147\40\x64\x69\x62\x65\x72\151\40\x68\141\153\x20\x75\156\x74\x75\153\40\155\145\156\x67\141\x6b\163\x65\x73\x20\x68\141\x6c\x61\155\x61\156\40\x69\156\151\x2c\40\74\x61\x20\x68\162\145\x66\75\x22" . base_url("\x64\x61\x73\x68\142\x6f\x61\x72\144") . "\42\76\113\x65\155\x62\x61\x6c\151\x20\x6b\145\x20\x6d\x65\x6e\165\x20\141\167\x61\x6c\x3c\x2f\x61\76", 403, "\x41\x6b\x73\x65\x73\40\x44\151\x62\141\x74\x61\163\x69"); goto kHfGM; flSf1: goto b_Lqe; goto TEphg; NwiNI: redirect("\141\165\x74\x68"); goto N7mWW; sTHVM: $this->form_validation->set_error_delimiters('', ''); goto fuepI; kHfGM: SCGhw: goto flSf1; TEphg: ztBMj: goto NwiNI; N9UcH: $this->load->model("\x4d\141\163\164\x65\x72\x5f\155\157\x64\x65\154", "\x6d\x61\x73\x74\x65\x72"); goto ah4jX; fuepI: } public function output_json($data, $encode = true) { goto uC21_; cS9AD: CfNnn: goto dGevL; uC21_: if (!$encode) { goto CfNnn; } goto gTVeb; dGevL: $this->output->set_content_type("\141\160\x70\154\x69\143\141\164\151\x6f\156\57\x6a\163\157\156")->set_output($data); goto XCh7M; gTVeb: $data = json_encode($data); goto cS9AD; XCh7M: } public function index() { goto UYv9X; XZiDl: $arrMapel = []; goto SHQFQ; Gzzs3: $smt = $this->master->getSemesterActive(); goto rE9IV; aoGMh: $data["\x62\165\154\141\x6e"] = $this->dropdown->getBulan(); goto Txt2L; f0Yxh: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); C8xIn: } goto x4qki; bAJNA: s3NtF: goto iSj2F; orDi2: if (!($mapel != null)) { goto s3NtF; } goto czm20; J4xvD: $data["\141\x72\162\153\x65\154\141\163"] = $arrKelas; goto ureno; rE9IV: $data["\x74\x70"] = $this->dashboard->getTahun(); goto llgN5; qdXsC: $this->load->view("\x6d\x65\x6d\142\145\x72\163\x2f\147\x75\x72\165\x2f\x74\145\x6d\160\154\141\164\145\163\57\x66\x6f\x6f\164\x65\162"); goto Yg2Mc; QzbBb: $this->load->view("\x6b\x65\x6c\141\163\57\x61\142\x73\145\x6e\142\x75\x6c\141\156\141\x6e\x2f\144\x61\164\x61"); goto qdXsC; e5xqr: $this->load->view("\137\x74\x65\155\160\x6c\141\164\145\x73\57\x64\x61\163\150\x62\x6f\141\162\144\57\137\150\145\x61\x64\x65\x72", $data); goto nJn3_; ZNa8g: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto aI_zO; Txt2L: if ($this->ion_auth->is_admin()) { goto oIXsE; } goto ZNa8g; e87Yb: $data["\x6d\141\160\x65\154"] = $this->dropdown->getAllMapel(); goto e5xqr; aI_zO: $nguru[$guru->id_guru] = $guru->nama_guru; goto dwV32; zrhJn: $this->load->view("\137\164\145\x6d\160\154\x61\x74\145\163\57\144\x61\163\150\142\x6f\x61\162\x64\x2f\x5f\146\157\x6f\x74\x65\x72"); goto m2ogX; ureno: $data["\x6b\145\154\x61\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto KbhqX; P5XVI: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto XZiDl; KbhqX: $this->load->view("\x6d\145\x6d\142\145\x72\163\x2f\147\x75\162\x75\57\x74\x65\155\160\x6c\x61\164\145\x73\x2f\150\145\x61\144\x65\162", $data); goto QzbBb; llgN5: $data["\x74\160\137\141\143\x74\151\166\x65"] = $tp; goto boZmw; H719n: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto P5XVI; tR706: $data["\x69\x64\x5f\147\165\162\x75"] = $guru->id_guru; goto H719n; nJn3_: $this->load->view("\153\x65\x6c\x61\163\57\x61\142\163\145\156\142\x75\154\141\x6e\x61\x6e\57\144\141\164\x61"); goto zrhJn; boZmw: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto JQCHJ; v_REW: $data["\160\x72\157\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto fsm7A; a0rIC: if (!($mapel != null)) { goto NesWE; } goto f0Yxh; Iwgkp: $tp = $this->master->getTahunActive(); goto Gzzs3; Yg2Mc: goto cAoeM; goto LDrrz; czm20: foreach ($mapel as $m) { goto MW1b5; Rxq8d: wIVUI: goto EIOBV; MW1b5: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto dUf6R; dUf6R: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\x69\144\137\x6b\145\154\x61\163" => $kls->kelas, "\156\141\x6d\x61\x5f\x6b\145\x6c\x61\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; yjPX2: } goto vNwdm; vNwdm: O0VK6: goto Rxq8d; EIOBV: } goto Xzxmo; JQCHJ: $data["\x73\x6d\x74\137\141\x63\x74\151\x76\145"] = $smt; goto aoGMh; LDrrz: oIXsE: goto v_REW; nTQY_: $data["\x6d\141\x70\145\154"] = $arrMapel; goto J4xvD; QIViX: $data = ["\x75\163\x65\x72" => $user, "\x6a\165\x64\165\x6c" => "\x44\x61\146\164\x61\162\x20\110\x61\x64\x69\x72\x20\102\x75\x6c\141\156\x61\156", "\x73\165\x62\x6a\x75\x64\x75\x6c" => "\104\x61\x66\164\x61\162\40\x48\x61\144\151\162\40\x42\165\154\141\156\141\156\x20\x53\151\x73\167\x61", "\x73\x65\164\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto Iwgkp; Xzxmo: Ev18B: goto bAJNA; SHQFQ: $arrKelas = []; goto orDi2; UYv9X: $user = $this->ion_auth->user()->row(); goto QIViX; UsTBG: NesWE: goto nTQY_; pLmMM: $data["\147\x75\x72\x75"] = $this->dropdown->getAllGuru(); goto e87Yb; m2ogX: cAoeM: goto SAH76; x4qki: a038i: goto UsTBG; iSj2F: $arrId = []; goto a0rIC; fsm7A: $data["\153\145\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto pLmMM; dwV32: $data["\x67\x75\162\x75"] = $guru; goto tR706; SAH76: } public function loadAbsensiMapel() { goto UbTW9; UzHvw: $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); goto DMVsf; tGdNf: $id_tp = $this->master->getTahunActive()->id_tp; goto OxXps; ISmbB: goto lwZ8i; goto r334g; RWcH2: $jadwal_materi[$t] = (array) $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $b . "\x2d" . $t, [$id_mapel]); goto C8EPL; YloD0: $i++; goto HX3jW; OxXps: $id_smt = $this->master->getSemesterActive()->id_smt; goto uS9j6; KD93T: if (!($i < $tgl)) { goto QsA38; } goto TEDdF; MkSKs: $id_mapel = $this->input->post("\x6d\x61\160\x65\154", true); goto NLmVG; AGdci: dV38t: goto N282X; pMNMA: zSLtD: goto KD93T; PtJr1: $bulan = $this->input->post("\142\x6c\156", true); goto tGdNf; HX3jW: goto zSLtD; goto JHd98; r334g: JUnHp: goto EPBS7; RPcC1: $log = []; goto psOoJ; hAmF4: lwZ8i: goto Dfqyf; NLmVG: $tahun = $this->input->post("\x74\150\x6e", true); goto PtJr1; C8EPL: DNLv4: goto YloD0; psOoJ: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto mAiCA; TEDdF: $t = $i + 1 < 10 ? "\x30" . ($i + 1) : $i + 1; goto GPzD1; kpmQ2: if ($jadwal != null) { goto JUnHp; } goto aDY88; MfX6J: $infos = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $id_tp, $id_smt); goto IS3wh; DMVsf: $jadwal_materi = []; goto jRw42; jRw42: $i = 0; goto pMNMA; LOgNf: $mapel_bulan_ini = []; goto MfX6J; mAiCA: foreach ($siswa as $s) { goto vPLmx; zzsy2: $i++; goto Sg4wy; c34FO: CbU40: goto GAjEz; Ftlxb: $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1; goto WoYaT; APVF3: bfH8u: goto qI13i; Sg4wy: goto yhcb7; goto APVF3; I3Zus: ctD81: goto zzsy2; GPUKH: yhcb7: goto QKx1Q; eGqRW: $arrMateri[2][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][2]) && isset($materi_perbulan[$s->id_siswa][2][$tahun . "\55" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][2][$tahun . "\x2d" . $b . "\55" . $t] : null; goto I3Zus; WoYaT: $b = $bulan < 10 ? "\x30" . $bulan : $bulan; goto zfk7M; QKx1Q: if (!($i < $tgl)) { goto bfH8u; } goto Ftlxb; N1akg: $i = 0; goto GPUKH; zfk7M: $arrMateri[1][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][1]) && isset($materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][1][$tahun . "\55" . $b . "\55" . $t] : null; goto eGqRW; vPLmx: $arrMateri = []; goto N1akg; qI13i: $log[$s->id_siswa] = ["\x6e\x61\x6d\x61" => $s->nama, "\x6e\151\163" => $s->nis, "\x6b\x65\x6c\141\x73" => $s->nama_kelas, "\x6d\x61\x74\x65\x72\x69" => $arrMateri[1], "\x74\x75\147\141\163" => $arrMateri[2]]; goto c34FO; GAjEz: } goto cZmFJ; JHd98: QsA38: goto T7_bm; GPzD1: $b = $bulan < 10 ? "\60" . $bulan : $bulan; goto RWcH2; aDY88: $this->output_json(["\152\x61\144\167\141\154" => $jadwal]); goto ISmbB; T7_bm: $materi_perbulan = $this->kelas->getRekapBulananSiswa($id_mapel, $id_kelas, $tahun, $bulan); goto RPcC1; EPBS7: $jadwal->istirahat = unserialize($jadwal->istirahat); goto UzHvw; UbTW9: $id_kelas = $this->input->post("\x6b\x65\154\x61\163", true); goto MkSKs; cZmFJ: W4VQG: goto LOgNf; N282X: $this->output_json(["\x6c\x6f\x67" => $log, "\x6a\x61\x64\x77\x61\x6c" => $jadwal, "\x6d\x61\164\145\162\x69" => $jadwal_materi, "\x6d\x61\x70\x65\154\x73" => $mapel_bulan_ini]); goto hAmF4; IS3wh: foreach ($infos as $info) { goto Avza1; Joc2f: b3EUi: goto c_3dd; slYOK: foreach ($dates as $date) { goto JtAmE; elHRo: fG67f: goto HaR0a; TySXt: $mapel_bulan_ini[$d[2]][$info->jam_ke] = $date; goto elHRo; JtAmE: $d = explode("\55", $date); goto TySXt; HaR0a: } goto r4Ls8; r4Ls8: hhtKS: goto Joc2f; Avza1: $dates = $this->total_hari($info->id_hari, $bulan, $tahun); goto slYOK; c_3dd: } goto AGdci; uS9j6: $jadwal = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto kpmQ2; Dfqyf: } function total_hari($id_day, $bulan, $taun) { goto vjztj; Vsjw4: hPjIS: goto zMleV; OTJ0l: Nr9wM: goto aYPHT; HLRxk: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto uDRtK; MX7RX: goto lFr0U; goto Vsjw4; Rihwq: if (!($i < $total_days)) { goto hPjIS; } goto WFhzy; bcY34: $i = 1; goto a3fQP; mn3zq: $dates = []; goto HLRxk; WFhzy: if (!(date("\116", strtotime($taun . "\x2d" . $bulan . "\x2d" . $i)) == $idday)) { goto fCJ2Q; } goto VaWNP; a3fQP: lFr0U: goto Rihwq; vjztj: $days = 0; goto mn3zq; uDRtK: $idday = $id_day == "\67" ? 0 : $id_day; goto bcY34; stCYC: array_push($dates, date("\x59\x2d\x6d\55\x64", strtotime($taun . "\55" . $bulan . "\55" . $i))); goto gHXpZ; zMleV: return $dates; goto mbZI5; VaWNP: $days++; goto stCYC; gHXpZ: fCJ2Q: goto OTJ0l; aYPHT: $i++; goto MX7RX; mbZI5: } }
