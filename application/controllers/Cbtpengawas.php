<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtpengawas extends CI_Controller { public function __construct() { goto lYF9d; y8HaN: $this->load->model("\104\x61\x73\150\142\157\141\x72\x64\137\155\x6f\x64\x65\154", "\144\x61\x73\x68\142\157\x61\162\x64"); goto aD3cl; zfg3F: $this->form_validation->set_error_delimiters('', ''); goto cEgsZ; lYF9d: parent::__construct(); goto Eesqp; nZb_h: XFsdu: goto GqGQB; GqGQB: redirect("\141\165\x74\150"); goto QIE6m; berHp: $this->load->model("\115\x61\x73\164\145\x72\137\155\157\x64\x65\154", "\155\141\x73\164\x65\x72"); goto y8HaN; qJ49l: if ($this->ion_auth->is_admin()) { goto pfmzU; } goto OsOVb; OsOVb: show_error("\110\141\x6e\171\x61\40\101\x64\x6d\x69\x6e\151\163\164\x72\141\164\x6f\x72\40\171\x61\156\147\x20\x64\x69\x62\x65\162\x69\40\x68\141\153\x20\x75\156\x74\x75\153\x20\x6d\145\x6e\147\x61\x6b\x73\x65\x73\x20\x68\x61\154\141\155\x61\x6e\40\151\x6e\x69\x2c\40\74\141\x20\x68\x72\x65\x66\x3d\42" . base_url("\x64\x61\163\150\x62\x6f\141\x72\x64") . "\x22\x3e\x4b\x65\x6d\x62\x61\154\151\x20\x6b\145\40\155\x65\x6e\165\40\141\x77\x61\x6c\x3c\x2f\141\x3e", 403, "\101\153\x73\x65\163\x20\x54\x65\162\x6c\x61\x72\x61\x6e\147"); goto cLCqz; B3pMt: $this->load->model("\104\162\157\160\144\157\x77\156\x5f\155\x6f\144\x65\x6c", "\x64\162\x6f\x70\144\157\167\x6e"); goto zfg3F; U3n16: goto ouY69; goto nZb_h; Eesqp: if (!$this->ion_auth->logged_in()) { goto XFsdu; } goto qJ49l; cLCqz: pfmzU: goto U3n16; aD3cl: $this->load->model("\x43\142\x74\x5f\155\157\x64\x65\154", "\143\142\x74"); goto B3pMt; tBEbG: $this->load->library(["\x64\x61\x74\x61\164\141\x62\154\145\163", "\146\157\162\155\137\166\x61\154\x69\x64\141\164\151\x6f\x6e"]); goto berHp; QIE6m: ouY69: goto tBEbG; cEgsZ: } public function output_json($data, $encode = true) { goto pbQ4m; pbQ4m: if (!$encode) { goto KVzJp; } goto fNQXC; VEkNI: $this->output->set_content_type("\141\160\x70\x6c\x69\x63\141\x74\151\157\x6e\x2f\x6a\163\x6f\156")->set_output($data); goto jdSYe; fNQXC: $data = json_encode($data); goto NII91; NII91: KVzJp: goto VEkNI; jdSYe: } public function index() { goto G8Y9q; VZntJ: $data["\x73\145\x73\x69\x5f\x73\145\x6c\x65\143\x74\x65\144"] = $sesi_selected; goto KGkkH; Mem8g: $data["\x6a\x65\156\151\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto kkgaS; WCXyJ: $data["\x6a\x65\156\151\x73\x5f\163\x65\x6c\x65\143\x74\x65\144"] = $jenis_selected; goto Nzq9b; C_zNc: yp0Ob: goto Mem8g; h3dDL: $data["\162\165\141\156\x67\137\163\145\x6c\x65\x63\164\x65\x64"] = $ruang_selected; goto NTH0X; JzxHA: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); faaUX: } goto kwntq; YcEEs: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto JtnmW; v0oHk: if (count($ids) > 0) { goto yp0Ob; } goto IRSpm; LXt1F: $jenis_selected = $this->input->get("\152\x65\x6e\151\x73", true); goto WCXyJ; NyDx3: if (!($jenis_selected != null)) { goto NV1Qh; } goto E9igF; EI2y0: $data["\x70\145\156\147\141\167\x61\x73"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt, $ruang_selected, $sesi_selected); goto tUdnb; xhqhr: NV1Qh: goto z6SeW; tznjF: $tp = $this->dashboard->getTahunActive(); goto wmI6K; jh3IH: goto O8NX9; goto C_zNc; wmI6K: $smt = $this->dashboard->getSemesterActive(); goto RjP31; kwntq: E7D0L: goto Au31b; NTH0X: $data["\x72\x75\141\156\x67"] = $this->dropdown->getAllRuang(); goto dXmVD; JtnmW: $data["\x73\x6d\x74\x5f\141\x63\164\x69\166\145"] = $smt; goto I5yEv; Nzq9b: $tglJadwals = []; goto NyDx3; V65sY: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto IlO1a; sMVSu: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\x65\x73\x2f\144\x61\x73\x68\142\x6f\141\x72\x64\x2f\137\x66\x6f\x6f\164\145\x72"); goto NlU7e; I5yEv: $data["\153\145\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto gZcy3; Au31b: ll511: goto v0oHk; kkgaS: O8NX9: goto LXt1F; E9igF: $tglJadwals = $this->cbt->getAllJadwalByJenis($jenis_selected, $tp->id_tp, $smt->id_smt); goto xhqhr; ZpGeK: $setting = $this->dashboard->getSetting(); goto lbhAB; gZcy3: $data["\160\162\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto TwSgH; MPLtb: $this->load->view("\143\142\x74\57\x70\145\156\x67\x61\x77\141\163\57\144\141\164\141"); goto sMVSu; tXoHl: if (!(count($id_jenis) > 0)) { goto ll511; } goto JzxHA; vWOXm: $data["\x72\x75\141\156\147\x5f\163\x65\x73\151"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto EI2y0; cahQZ: $ruang_selected = $this->input->get("\x72\165\x61\x6e\147", true); goto h3dDL; G8Y9q: $user = $this->ion_auth->user()->row(); goto ZpGeK; Mz_4K: $data["\164\160\137\141\143\x74\x69\166\145"] = $tp; goto YcEEs; tUdnb: $this->load->view("\137\164\145\x6d\x70\154\x61\x74\145\163\x2f\x64\141\x73\x68\142\x6f\x61\x72\x64\x2f\137\x68\x65\141\144\145\x72", $data); goto MPLtb; dXmVD: $sesi_selected = $this->input->get("\x73\145\x73\x69", true); goto VZntJ; RjP31: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Mz_4K; lbhAB: $data = ["\165\163\145\x72" => $user, "\x6a\x75\x64\165\154" => "\x41\164\165\162\40\x50\x65\x6e\x67\x61\167\141\x73", "\163\165\x62\x6a\x75\x64\x75\x6c" => "\120\145\156\x67\141\167\x61\163\40\125\x6a\x69\141\x6e\57\x55\x6c\141\156\x67\x61\x6e", "\163\x65\164\164\151\156\147" => $setting]; goto tznjF; IlO1a: $ids = []; goto tXoHl; KGkkH: $data["\163\x65\x73\151"] = $this->dropdown->getAllSesi(); goto vWOXm; TwSgH: $data["\x67\165\162\x75\x73"] = $this->dropdown->getAllGuru(); goto V65sY; z6SeW: $data["\x74\x67\154\137\152\141\144\167\141\x6c\163"] = $tglJadwals; goto cahQZ; IRSpm: $data["\x6a\x65\x6e\151\163"] = ['' => "\x62\145\154\165\x6d\x20\x61\x64\141\x20\152\x61\x64\167\x61\x6c\40\165\152\151\141\156"]; goto jh3IH; NlU7e: } public function savePengawas() { goto efJo4; U6itP: $tp = $this->dashboard->getTahunActive(); goto kOYgj; xU3Fx: $id_tp = $tp->id_tp; goto EOrtp; EOrtp: $id_smt = $smt->id_smt; goto dfsMj; zkhS6: $data["\x65\162\x72\157\x72"] = "\55\x2d"; goto jCNPj; jCNPj: $data["\x73\164\141\164\165\x73"] = $updated; goto tYKgc; aLE8O: v2kLO: goto zkhS6; dfsMj: $updated = 0; goto UBsie; tYKgc: $this->output_json($data); goto vhfUh; UBsie: foreach ($input as $d) { goto OHk2N; OHk2N: $ruang = $d->ruang; goto l8tPL; ZQA9C: if (!$update) { goto NhG6H; } goto A72MP; D645T: $update = $this->db->replace("\143\142\164\137\160\145\156\147\141\x77\141\x73", $dataInsert); goto ZQA9C; c60aJ: $id_pengawas = $id_tp . $id_smt . $jadwal . $ruang . $sesi; goto RcdGl; A72MP: $updated++; goto V81g8; Zi6_Y: QGUVp: goto RN6fL; V81g8: NhG6H: goto Zi6_Y; sRQGB: $jadwal = $d->jadwal; goto c60aJ; l8tPL: $sesi = $d->sesi; goto sRQGB; RcdGl: $dataInsert = ["\151\x64\137\160\145\x6e\x67\141\x77\141\x73" => $id_pengawas, "\x69\x64\x5f\x6a\141\144\167\x61\x6c" => $jadwal, "\151\x64\x5f\x74\x70" => $id_tp, "\x69\x64\x5f\x73\155\x74" => $id_smt, "\151\x64\137\162\x75\141\156\147" => $ruang, "\151\x64\137\x73\x65\163\151" => $sesi, "\151\x64\137\147\x75\162\x75" => implode("\54", $d->guru)]; goto D645T; RN6fL: } goto aLE8O; kOYgj: $smt = $this->dashboard->getSemesterActive(); goto xU3Fx; efJo4: $input = json_decode($this->input->post("\x64\x61\164\141", true)); goto U6itP; vhfUh: } }
