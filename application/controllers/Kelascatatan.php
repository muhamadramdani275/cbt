<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelascatatan extends CI_Controller { public function __construct() { goto IOu1W; UoqIX: redirect("\x61\x75\x74\150"); goto YNq19; lIfby: DhHGt: goto yFWxO; IOu1W: parent::__construct(); goto DhIQn; WItBV: $this->load->model("\104\x61\x73\x68\x62\x6f\x61\162\144\137\155\x6f\x64\x65\154", "\x64\141\163\150\x62\157\x61\162\x64"); goto dmYhk; dmYhk: $this->load->model("\104\162\157\x70\144\157\167\x6e\137\155\x6f\144\145\x6c", "\x64\x72\x6f\x70\x64\157\167\x6e"); goto lJYUs; wozBF: show_error("\110\x61\156\171\141\40\101\x64\155\x69\156\151\x73\x74\x72\141\164\x6f\162\x20\171\141\x6e\x67\x20\144\x69\x62\145\162\151\40\x68\141\x6b\40\165\156\164\x75\x6b\40\x6d\145\156\147\141\153\163\x65\163\40\150\141\x6c\x61\x6d\x61\156\40\x69\x6e\x69\x2c\x20\x3c\141\40\150\x72\145\x66\x3d\x22" . base_url("\144\141\163\x68\x62\157\x61\x72\x64") . "\42\76\x4b\x65\x6d\x62\x61\x6c\151\x20\x6b\145\40\x6d\x65\x6e\x75\x20\141\167\x61\x6c\74\x2f\141\x3e", 403, "\101\153\x73\x65\x73\x20\x54\145\162\x6c\141\162\141\x6e\x67"); goto lIfby; J6FnG: $this->load->library(["\x64\x61\x74\x61\x74\x61\x62\x6c\145\x73", "\x66\x6f\x72\x6d\137\166\141\154\151\144\x61\x74\x69\x6f\156"]); goto H4xvV; SXa5_: $this->form_validation->set_error_delimiters('', ''); goto P5k6l; XlTIw: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) { goto DhHGt; } goto wozBF; yFWxO: goto O3Vm6; goto Dxh79; DhIQn: if (!$this->ion_auth->logged_in()) { goto ykBma; } goto XlTIw; lJYUs: $this->load->model("\113\x65\x6c\x61\163\x5f\155\x6f\144\145\x6c", "\x6b\145\x6c\141\x73"); goto SXa5_; Dxh79: ykBma: goto UoqIX; YNq19: O3Vm6: goto J6FnG; H4xvV: $this->load->model("\115\141\x73\x74\145\x72\x5f\x6d\x6f\x64\x65\154", "\x6d\141\163\164\145\x72"); goto WItBV; P5k6l: } public function output_json($data, $encode = true) { goto I9GIV; gRIsm: $this->output->set_content_type("\141\160\160\154\x69\x63\141\164\151\157\156\x2f\152\x73\157\x6e")->set_output($data); goto LgkM1; r0Q_o: wFI36: goto gRIsm; I9GIV: if (!$encode) { goto wFI36; } goto dPmYT; dPmYT: $data = json_encode($data); goto r0Q_o; LgkM1: } public function index() { goto TNRaR; O3muI: $data["\143\141\x74\x5f\153\x65\154\x61\x73"] = $cat_kelas; goto fHfX0; OwvdU: $data["\x6b\x65\154\x61\163\137\163\145\x6c\x65\x63\164\x65\x64"] = $id_kelas; goto vD5NM; Rfvxs: $setting = $this->dashboard->getSetting(); goto xf422; P6NC4: $cat_kelas = $this->kelas->getCatatanMapelKelas($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto vCogH; IA72x: ZJBCJ: goto YF6jx; iBybd: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto rBnGU; jZzfY: $kelasses = []; goto nzsko; XrXu0: if ($this->ion_auth->is_admin()) { goto Z3ymQ; } goto iBybd; KjA47: foreach ($mapel as $mpl) { goto hGepa; te0DG: HQazx: goto CsGld; hGepa: foreach ($mpl->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); zdubE: } goto ukCSf; ukCSf: Vsxvs: goto te0DG; CsGld: } goto ZN4XY; aY0xD: UZtQC: goto cAXk4; cAXk4: $arrMapel = []; goto Tpm1S; US6aU: $data["\x73\155\x74\137\141\x63\x74\x69\x76\145"] = $smt; goto uedft; xvynZ: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto IuJAB; J5P0t: $this->load->view("\155\x65\155\142\145\162\x73\57\147\x75\x72\165\57\x74\145\155\x70\154\141\x74\145\163\57\146\157\157\164\x65\162"); goto ggzVe; nzsko: if (!(count($arrId) > 0)) { goto UZtQC; } goto me8nJ; R_1Tk: Z3ymQ: goto txRTP; S5iVe: $this->load->view("\x5f\x74\145\155\x70\154\x61\x74\145\x73\57\x64\141\163\x68\x62\x6f\141\x72\144\57\x5f\x66\x6f\x6f\x74\x65\x72"); goto khtM0; vD5NM: $data["\x6d\x61\160\x65\154\x5f\163\x65\154\145\143\164\145\x64"] = $id_mapel; goto SdOfS; oS6rK: if (!($mapel != null)) { goto wAUjG; } goto KjA47; mKHcX: $data["\164\x70"] = $this->dashboard->getTahun(); goto Dg2z7; txRTP: $data["\x70\x72\157\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto qcBDz; aRzs1: $this->load->view("\155\145\155\x62\145\162\x73\x2f\147\165\x72\165\x2f\164\x65\155\x70\x6c\x61\x74\x65\x73\57\x68\x65\x61\x64\145\162", $data); goto yOS36; ZCL9q: YZqkd: goto IA72x; vCogH: foreach ($cat_kelas as $ck) { $ck->reading = unserialize($ck->reading); sPl6q: } goto hSBmF; Tpm1S: $arrKelas = []; goto MWl0f; TNRaR: $user = $this->ion_auth->user()->row(); goto Rfvxs; ZN4XY: AOlzK: goto jRSLz; uedft: $id_kelas = $this->input->get("\153\145\x6c\141\x73", true); goto CSh7D; f7C24: $data["\x69\144\x5f\147\165\162\165"] = $guru->id_guru; goto xvynZ; YF6jx: $data["\155\141\x70\x65\x6c"] = $arrMapel; goto pw1DX; Dg2z7: $data["\164\x70\x5f\141\143\164\x69\166\145"] = $tp; goto UH1bd; rBnGU: $data["\147\165\162\165"] = $guru; goto f7C24; me8nJ: $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId); goto aY0xD; MWl0f: if (!($mapel != null)) { goto ZJBCJ; } goto BfMbp; xf422: $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\144\165\154" => "\103\141\164\x61\164\141\x6e\40\107\165\x72\165", "\163\x75\142\x6a\x75\144\x75\154" => "\x43\x61\164\141\164\x61\156\40\x53\145\154\141\x6d\x61\x20\120\145\155\x62\x65\154\x61\152\x61\x72\141\x6e", "\163\145\x74\164\151\x6e\147" => $setting]; goto rQYcI; qcBDz: $data["\x6d\141\x70\x65\x6c"] = $this->dropdown->getAllMapel(); goto Co3x1; khtM0: QtDUc: goto kVXwN; jRSLz: wAUjG: goto jZzfY; rQYcI: $tp = $this->dashboard->getTahunActive(); goto UcuJU; Gxje1: $arrId = []; goto oS6rK; pw1DX: $data["\x6b\145\x6c\x61\163"] = $arrKelas; goto aRzs1; ggzVe: goto QtDUc; goto R_1Tk; CSh7D: $id_mapel = $this->input->get("\x6d\x61\160\x65\x6c", true); goto OwvdU; hSBmF: K_ecH: goto O3muI; Co3x1: $data["\x6b\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto ymn8U; SdOfS: if (!($id_kelas != null)) { goto yzBiZ; } goto P6NC4; UcuJU: $smt = $this->dashboard->getSemesterActive(); goto mKHcX; jWcd9: $this->load->view("\x6d\145\155\x62\145\x72\x73\x2f\x67\x75\x72\x75\57\x6b\x65\154\141\x73\x2f\x63\141\164\141\x74\x61\156\x2f\144\x61\x74\x61"); goto S5iVe; fHfX0: $data["\143\x61\164\x5f\163\151\163\x77\x61"] = $this->kelas->getCatatanMapelSiswa($tp->id_tp, $smt->id_smt, $id_kelas, $id_mapel); goto S71G6; BfMbp: foreach ($mapel as $m) { goto CUjj0; CUjj0: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto mTUst; mTUst: foreach ($m->kelas_mapel as $kls_mapel) { goto C2ai6; oPVhQ: JlG6N: goto DwAM1; C2ai6: foreach ($kelasses as $key => $kelass) { goto LFHJc; ux0Nf: U8oBr: goto atUFB; h_JyW: hkjef: goto ux0Nf; LFHJc: if (!($kls_mapel->kelas == $key)) { goto hkjef; } goto woLth; woLth: $arrKelas[$m->id_mapel][$key] = $kelass; goto h_JyW; atUFB: } goto oPVhQ; DwAM1: H312I: goto Dp8vZ; Dp8vZ: } goto yKCjD; HCRjC: F3GN7: goto dcgRd; yKCjD: b7aPK: goto HCRjC; dcgRd: } goto ZCL9q; UH1bd: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto US6aU; ymn8U: $this->load->view("\137\164\x65\155\160\x6c\141\x74\x65\x73\57\144\x61\163\150\142\157\141\x72\x64\x2f\137\150\x65\141\x64\x65\162", $data); goto jWcd9; S71G6: yzBiZ: goto XrXu0; yOS36: $this->load->view("\x6d\145\155\142\x65\x72\x73\57\147\x75\x72\x75\57\x6b\145\x6c\141\163\57\143\141\164\141\164\141\x6e\57\x64\141\164\x61"); goto J5P0t; IuJAB: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto Gxje1; kVXwN: } public function siswa() { goto oUIMt; vDOzt: $id_kelas = $this->input->get("\153\145\154\141\x73"); goto xZWPP; yJyBE: $data["\x74\160\x5f\x61\143\x74\x69\166\x65"] = $tp; goto AmXvz; Rzx32: goto BFbJf; goto YEfHF; YEfHF: KrCEx: goto wS8IT; NCG2T: $data["\x6d\x61\160\x65\154"] = $id_mapel; goto NkNde; Ij6f4: $data["\147\x75\162\x75"] = $guru; goto m34gs; HT5Js: $smt = $this->master->getSemesterActive(); goto EyP8D; ejNcY: $this->load->view("\137\x74\x65\x6d\160\x6c\141\164\145\163\57\144\x61\x73\150\x62\157\141\x72\144\x2f\137\146\157\157\164\145\162"); goto LJ9Ql; bEINf: $this->load->view("\155\145\x6d\x62\x65\162\x73\x2f\x67\165\162\x75\57\x74\145\155\160\154\x61\x74\145\163\57\146\x6f\x6f\x74\x65\162"); goto Rzx32; m34gs: $this->load->view("\x6d\145\x6d\142\145\162\163\57\x67\x75\162\165\57\164\x65\155\x70\x6c\x61\x74\145\x73\57\x68\x65\x61\144\x65\x72", $data); goto rnae7; wS8IT: $data["\160\x72\157\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto eJjSy; xZWPP: $user = $this->ion_auth->user()->row(); goto i07NF; rBfW4: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Ij6f4; i07NF: $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\x75\x6c" => "\x43\x61\x74\141\164\x61\156\40\123\x69\163\x77\x61", "\x73\x75\142\x6a\165\144\x75\x6c" => "\103\141\x74\141\164\x61\x6e\x20\123\151\x73\x77\141", "\x73\145\x74\x74\151\156\x67" => $this->dashboard->getSetting()]; goto rCD_a; eJjSy: $this->load->view("\137\x74\x65\x6d\160\154\141\164\x65\x73\57\144\x61\163\150\142\x6f\x61\162\144\x2f\x5f\150\x65\141\x64\145\x72", $data); goto zzcLi; oUIMt: $id_siswa = $this->input->get("\x69\144"); goto W_PvH; O9mYE: $data["\x63\x61\164\x61\x74\141\x6e\137\x73\151\163\167\141"] = $this->kelas->getAllCatatanMapelSiswa($id_siswa, $id_mapel, $tp->id_tp, $smt->id_smt); goto NCG2T; C6x9V: $data["\x73\151\163\x77\141"] = $this->master->getSiswaById($id_siswa); goto O9mYE; LJ9Ql: BFbJf: goto ZiTFP; xIR5m: if ($this->ion_auth->is_admin()) { goto KrCEx; } goto rBfW4; NkNde: $data["\x6b\145\154\x61\163"] = $id_kelas; goto xIR5m; rCD_a: $tp = $this->master->getTahunActive(); goto HT5Js; EyP8D: $data["\x74\160"] = $this->dashboard->getTahun(); goto yJyBE; ppY5n: $data["\x73\155\x74\x5f\x61\x63\x74\x69\166\145"] = $smt; goto C6x9V; W_PvH: $id_mapel = $this->input->get("\x6d\141\160\x65\154"); goto vDOzt; AmXvz: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto ppY5n; zzcLi: $this->load->view("\x6d\145\x6d\142\145\x72\x73\x2f\147\165\x72\165\57\153\x65\x6c\141\x73\57\143\141\164\141\164\141\x6e\x2f\160\x65\x72\x73\x69\x73\x77\141"); goto ejNcY; rnae7: $this->load->view("\x6d\145\x6d\142\145\162\163\x2f\x67\165\162\x75\57\x6b\x65\x6c\x61\163\x2f\x63\x61\x74\141\x74\x61\156\x2f\x70\x65\x72\x73\151\x73\x77\x61"); goto bEINf; ZiTFP: } public function saveCatatanKelas() { goto C5CRo; GCxeg: $level = $this->input->post("\x6c\x65\166\x65\x6c", true); goto pwM6g; Xvfyb: $id_kelas = $this->input->post("\x69\144\x5f\x6b\x65\x6c\x61\163"); goto t36u3; t36u3: $id_mapel = $this->input->post("\151\x64\137\155\141\160\x65\x6c", true); goto iuK1I; obb1G: $data = ["\151\144\x5f\x74\x70" => $tp->id_tp, "\151\x64\137\163\155\164" => $smt->id_smt, "\x74\x79\x70\x65" => "\x31", "\x69\x64\x5f\155\141\x70\x65\x6c" => $id_mapel, "\x69\144\137\x6b\x65\x6c\x61\163" => $id_kelas, "\151\144\x5f\x67\x75\x72\x75" => $guru->id_guru, "\154\x65\166\145\x6c" => $level, "\164\x65\x78\x74" => $text, "\162\145\141\144\151\156\147" => serialize([])]; goto z0T0A; uk95h: $user = $this->ion_auth->user()->row(); goto CviZ3; qkUVP: $smt = $this->dashboard->getSemesterActive(); goto uk95h; C5CRo: $tp = $this->dashboard->getTahunActive(); goto qkUVP; cUY0m: $this->output_json($insert); goto Zwymy; CviZ3: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Xvfyb; pwM6g: $tgl = date("\131\x2d\155\55\x64"); goto obb1G; iuK1I: $text = $this->input->post("\164\x65\x78\164", true); goto GCxeg; z0T0A: $insert = $this->master->create("\x6b\145\x6c\141\163\x5f\143\x61\x74\x61\164\x61\x6e\137\155\x61\x70\x65\154", $data); goto cUY0m; Zwymy: } public function saveCatatanSiswa() { goto bdpwB; bdpwB: $tp = $this->dashboard->getTahunActive(); goto oqZGo; Qac1l: $text = $this->input->post("\164\145\170\x74", true); goto LX_xX; S_40x: $data = ["\x69\x64\137\164\160" => $tp->id_tp, "\x69\x64\x5f\x73\155\164" => $smt->id_smt, "\164\171\x70\145" => "\62", "\x69\x64\137\x6d\141\160\145\154" => $id_mapel, "\151\144\x5f\x73\151\163\x77\141" => $id_siswa, "\x69\144\137\x67\165\162\165" => $guru->id_guru, "\154\x65\166\145\x6c" => $level, "\164\x65\x78\164" => $text, "\x72\x65\141\144\151\x6e\x67" => serialize([])]; goto YJDLo; oqZGo: $smt = $this->dashboard->getSemesterActive(); goto HMD_v; HMD_v: $user = $this->ion_auth->user()->row(); goto DwAlF; IewKX: $id_siswa = $this->input->post("\x69\144\x5f\163\151\x73\x77\x61"); goto Yes3f; LX_xX: $level = $this->input->post("\154\145\x76\145\154", true); goto S_40x; U1x4x: $this->output_json($insert); goto QrfF1; Yes3f: $id_mapel = $this->input->post("\x69\x64\x5f\155\141\x70\145\154", true); goto Qac1l; YJDLo: $insert = $this->master->create("\x6b\x65\x6c\141\163\x5f\x63\141\x74\141\164\141\x6e\137\155\x61\x70\x65\154", $data); goto U1x4x; DwAlF: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto IewKX; QrfF1: } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\x65\154\x61\163\x5f\143\141\164\x61\x74\x61\156\137\155\x61\160\x65\x6c", $id_catatan, "\151\x64\137\143\141\164\x61\x74\141\156"); $this->output_json($delete); } }
