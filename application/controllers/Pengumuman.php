<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Pengumuman extends CI_Controller { public function __construct() { goto IZzcc; KbUAj: $this->load->model("\x44\141\163\x68\x62\157\x61\162\144\x5f\x6d\157\144\x65\x6c", "\x64\x61\x73\150\x62\x6f\x61\x72\144"); goto Vx4Z1; ozItU: if (!$this->ion_auth->logged_in()) { goto iVjYN; } goto I8cQA; FKj4J: goto vSsh1; goto l9tpN; Vx4Z1: $this->load->model("\113\x65\x6c\x61\x73\137\155\x6f\x64\x65\x6c", "\x6b\x65\x6c\x61\x73"); goto dmcAS; dmcAS: $this->load->model("\x44\162\x6f\x70\x64\x6f\167\156\137\x6d\x6f\x64\x65\154", "\144\162\x6f\x70\144\157\x77\156"); goto glNl4; glNl4: $this->load->model("\x50\157\x73\164\137\x6d\157\144\x65\x6c", "\x70\157\x73\164"); goto xmeq9; kszPH: VC6F9: goto FKj4J; l9tpN: iVjYN: goto B7Deu; IZzcc: parent::__construct(); goto ozItU; xmeq9: $this->form_validation->set_error_delimiters('', ''); goto ubTKX; I8cQA: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\165"))) { goto VC6F9; } goto Fb5Kz; JH6_1: $this->load->library(["\144\x61\164\x61\164\141\x62\154\145\x73", "\x66\x6f\162\x6d\x5f\166\141\x6c\151\x64\x61\x74\151\x6f\156"]); goto f8E2w; Y84ge: vSsh1: goto JH6_1; B7Deu: redirect("\141\x75\x74\150"); goto Y84ge; Fb5Kz: show_error("\x48\141\x6e\171\x61\x20\101\x64\155\151\x6e\x69\x73\x74\x72\141\164\157\x72\40\144\141\x6e\x20\x67\x75\162\165\40\171\x61\156\x67\x20\144\x69\142\145\162\x69\40\150\141\x6b\40\x75\156\164\165\x6b\x20\x6d\145\x6e\147\x61\x6b\x73\x65\163\x20\x68\x61\154\x61\155\141\x6e\x20\151\156\x69\x2c\40\74\x61\40\x68\x72\145\146\75\42" . base_url("\x64\x61\x73\150\142\x6f\141\162\144") . "\x22\76\x4b\x65\x6d\142\x61\154\x69\x20\153\145\40\x6d\145\156\165\40\x61\x77\141\x6c\x3c\57\141\x3e", 403, "\x41\x6b\163\x65\x73\x20\x54\145\162\154\x61\x72\141\156\147"); goto kszPH; f8E2w: $this->load->model("\115\x61\163\x74\x65\162\137\x6d\157\x64\145\154", "\155\141\163\x74\145\x72"); goto KbUAj; ubTKX: } public function output_json($data, $encode = true) { goto p2sir; xrZkk: $data = json_encode($data); goto Bqm_3; Bqm_3: mHlzM: goto f5vj4; f5vj4: $this->output->set_content_type("\x61\160\x70\x6c\x69\x63\141\164\x69\157\x6e\x2f\x6a\163\157\156")->set_output($data); goto Nl2N7; p2sir: if (!$encode) { goto mHlzM; } goto xrZkk; Nl2N7: } public function index() { goto w755B; CZGMz: $data["\x73\165\x62\152\165\144\x75\154"] = "\x53\x65\155\165\141\x20\x50\x65\x6e\147\x75\x6d\165\155\x61\156"; goto UN6EN; w755B: $user = $this->ion_auth->user()->row(); goto hKpau; gJaqW: $this->load->view("\137\164\145\x6d\160\154\141\164\145\x73\x2f\x64\141\163\150\x62\157\141\x72\144\57\137\x68\145\x61\x64\x65\162", $data); goto fWd_u; UbiAZ: $this->load->view("\160\145\156\147\x75\x6d\x75\155\x61\156\x2f\144\x61\164\x61"); goto sVkFY; f0MYe: $data["\x67\165\162\x75\163"] = $this->dropdown->getAllGuru(); goto nTwYA; hKZxg: $this->load->view("\137\164\x65\x6d\160\154\141\x74\145\x73\x2f\144\141\163\x68\142\x6f\141\x72\144\x2f\x5f\x66\157\157\x74\145\162"); goto yooe0; kv2J6: $data["\153\x65\x6c\141\163"] = $kelas; goto xnBAF; cLP2x: GkwDG: goto CZGMz; YXlM5: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto G3FOY; PmZgp: $data["\x73\155\x74\x5f\x61\143\x74\x69\166\x65"] = $smt; goto f0MYe; G3FOY: $data["\147\165\x72\x75"] = $guru; goto NrSJK; SDNbA: $data["\160\145\156\x67\165\155\165\x6d\141\156\x73"] = $this->post->getPostUser(0); goto gJaqW; K5v6w: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto PmZgp; UeN9z: goto r120o; goto cLP2x; nTwYA: $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt); goto kv2J6; Yt56f: if ($this->ion_auth->is_admin()) { goto GkwDG; } goto ptoqf; viZv8: $this->load->view("\x6d\145\x6d\x62\x65\162\163\57\147\165\162\x75\57\x74\x65\x6d\x70\x6c\x61\164\x65\x73\x2f\150\x65\x61\x64\145\x72", $data); goto UbiAZ; Yb32n: $data["\x74\x70"] = $this->dashboard->getTahun(); goto xj5CR; UN6EN: $data["\x70\x72\157\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto SDNbA; ptoqf: $data["\163\165\142\152\x75\144\165\154"] = "\120\x65\156\147\165\155\x75\155\x61\156\40\x41\156\144\141"; goto YXlM5; xnBAF: $data["\162\165\156\x6e\151\x6e\147\x5f\164\x65\x78\164"] = $this->dashboard->getRunningText(); goto Yt56f; fWd_u: $this->load->view("\x70\145\156\x67\165\155\x75\155\x61\156\x2f\144\x61\164\141"); goto hKZxg; sVkFY: $this->load->view("\155\145\155\142\145\x72\163\57\x67\x75\x72\165\57\x74\x65\155\x70\154\x61\x74\145\x73\57\x66\157\157\x74\x65\x72"); goto UeN9z; NrSJK: $data["\x70\x65\x6e\147\x75\155\x75\x6d\x61\156\163"] = $this->post->getPostUser($guru->id_guru); goto viZv8; yooe0: r120o: goto pQnpU; xj5CR: $data["\x74\160\x5f\x61\143\164\x69\x76\x65"] = $tp; goto K5v6w; Z_VDG: $smt = $this->master->getSemesterActive(); goto Yb32n; fl4OF: $tp = $this->master->getTahunActive(); goto Z_VDG; hKpau: $data = ["\x75\x73\145\162" => $user, "\x6a\165\144\165\x6c" => "\120\x65\x6e\147\165\155\165\x6d\141\x6e", "\163\145\164\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto fl4OF; pQnpU: } public function kepada($kepada, $id_kepada = null) { goto IyjnB; lALP1: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto amVXK; gQ_vx: SbP8h: goto sQHrk; ibou1: $data["\x63\x6f\x6d\x6d\145\156\164\163"] = $comments; goto xv_Ak; VOBzB: $data["\x70\162\x6f\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto N01l8; X0_72: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto xQswO; amVXK: $data["\163\155\x74\x5f\141\143\x74\x69\x76\145"] = $smt; goto a4XID; dkFek: $data = ["\165\163\x65\x72" => $user, "\x6a\165\x64\x75\154" => "\120\145\156\x67\x75\155\x75\155\x61\156", "\x73\x75\142\152\x75\x64\165\154" => "\123\145\155\x75\141\40\x50\145\156\147\x75\x6d\165\155\141\x6e", "\163\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto y9Kh1; x9VoH: $comments = []; goto lQcFK; F8zU4: s8_6X: goto VOBzB; cS7OV: $data["\x6b\145\160\141\x64\x61"] = "\123\x65\x6d\x75\141\x20\107\165\x72\165"; goto M7UgK; e4089: foreach ($pengumumans as $pengumuman) { goto aMod2; Y13Gn: $this->db->where("\141\x2e\151\144\x5f\160\x6f\163\x74", $pengumuman->id_post); goto pQ9zo; q9hAW: $comments[$pengumuman->id_post] = $comment; goto tQWnG; yemqn: $this->db->from("\x70\x6f\x73\164\137\143\157\x6d\155\145\156\164\x73\x20\x61"); goto T2b1a; T2b1a: $this->db->join("\x6d\141\x73\164\145\162\137\x67\165\162\x75\40\x62", "\141\x2e\144\x61\x72\151\x3d\142\56\x69\144\137\147\x75\x72\165", "\154\145\x66\x74"); goto A5wFl; A5wFl: $this->db->order_by("\x61\56\164\x61\156\147\147\x61\x6c", "\144\145\163\x63"); goto Y13Gn; tQWnG: eCqxx: goto IugIB; AYpeH: foreach ($comment as $comm) { goto X120e; ONA1Y: $this->db->where("\x61\x2e\x69\144\137\143\157\x6d\155\145\156\x74", $comm->id_comment); goto M9P22; ylRbN: fTrtv: goto YQ_hQ; eHMrg: $this->db->order_by("\x61\56\x74\141\x6e\x67\147\141\x6c", "\x64\x65\163\x63"); goto ONA1Y; M9P22: $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result(); goto ylRbN; X120e: $this->db->select("\141\56\52\54\40\x62\56\x6e\141\155\141\137\147\165\x72\165\54\40\142\x2e\146\157\164\x6f"); goto qWnJI; qWnJI: $this->db->from("\x70\x6f\x73\164\137\x72\145\x70\154\x79\40\141"); goto I2zI7; I2zI7: $this->db->join("\155\141\x73\164\145\x72\x5f\147\165\162\x75\x20\x62", "\141\56\x64\x61\162\x69\75\142\x2e\151\x64\x5f\147\165\x72\165", "\154\x65\x66\164"); goto eHMrg; YQ_hQ: } goto puvRN; aMod2: $this->db->select("\x61\x2e\x2a\54\40\142\x2e\x6e\x61\155\141\x5f\x67\165\x72\x75\x2c\40\142\56\146\x6f\x74\157"); goto yemqn; puvRN: X0ixv: goto q9hAW; pQ9zo: $comment = $this->db->get()->result(); goto AYpeH; IugIB: } goto ffz0p; xzqUb: $this->db->join("\155\141\x73\x74\145\x72\137\147\165\162\x75\x20\x62", "\141\x2e\144\141\x72\x69\75\x62\56\151\144\x5f\147\x75\x72\165", "\154\x65\146\x74"); goto PVqmt; DUWYx: $this->load->view("\x6d\145\x6d\x62\x65\162\x73\57\x67\x75\x72\x75\57\x74\x65\x6d\160\x6c\141\x74\145\x73\57\150\145\x61\x64\x65\x72", $data); goto j5AoG; O9Rb1: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Kct4s; Kct4s: $data["\164\x70\x5f\x61\143\164\x69\x76\x65"] = $tp; goto lALP1; UVihY: $data["\160\145\156\x67\x75\155\165\x6d\x61\156\163"] = $pengumumans; goto ibou1; dT2Uv: $this->db->from("\x70\157\x73\x74\40\141"); goto xzqUb; lVW1y: $data["\153\145\160\141\144\x61"] = "\x53\x65\155\165\141\40\123\x69\x73\167\141"; goto gQ_vx; xQswO: $data["\153\x65\154\x61\163"] = $kelas; goto Lb_f6; U021A: goto DsTLj; goto F8zU4; Fut3t: goto SbP8h; goto lXkmU; lXkmU: Jwy8Q: goto cS7OV; M7UgK: goto SbP8h; goto SJYya; ffz0p: l3HQR: goto UVihY; O1cmm: $data["\147\165\x72\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DUWYx; n9L8M: $smt = $this->master->getSemesterActive(); goto O9Rb1; PVqmt: $this->db->order_by("\x61\x2e\x74\x61\156\x67\x67\x61\x6c", "\x64\x65\x73\143"); goto yYE4S; Lb_f6: $this->db->select("\141\56\x2a\54\x20\x62\56\156\141\x6d\x61\137\x67\165\162\165\x2c\x20\x62\x2e\x66\x6f\164\157"); goto dT2Uv; SJYya: F6ph0: goto lVW1y; lQcFK: $balasan = []; goto e4089; L229c: if ($kepada === "\163\x65\x6d\165\141\x5f\147\165\x72\165") { goto Jwy8Q; } goto OptS4; IyjnB: $user = $this->ion_auth->user()->row(); goto dkFek; yYE4S: $pengumumans = $this->db->get()->result(); goto x9VoH; Y2kKE: DsTLj: goto X8iII; sQHrk: if ($this->ion_auth->is_admin()) { goto s8_6X; } goto O1cmm; kc8Dq: $data["\153\145\x70\x61\144\141"] = urldecode($kepada); goto Fut3t; xv_Ak: $data["\142\x61\154\141\x73\141\x6e\x73"] = $balasan; goto L229c; y9Kh1: $tp = $this->master->getTahunActive(); goto n9L8M; j5AoG: $this->load->view("\x70\145\156\x67\165\x6d\x75\x6d\141\x6e\57\144\141\x74\141"); goto R3X0d; a4XID: $data["\147\x75\x72\165\x73"] = $this->dropdown->getAllGuru(); goto X0_72; R3X0d: $this->load->view("\x6d\145\x6d\142\145\162\x73\57\x67\165\162\165\57\164\145\155\160\154\141\x74\x65\x73\57\146\157\x6f\164\145\x72"); goto U021A; OptS4: if ($kepada === "\x73\145\155\165\x61\x5f\x73\x69\x73\x77\141") { goto F6ph0; } goto kc8Dq; X6nIc: $this->load->view("\x70\145\156\x67\165\155\x75\155\x61\x6e\57\x64\x61\164\141"); goto zFc1z; zFc1z: $this->load->view("\137\164\x65\x6d\x70\154\x61\164\x65\163\57\x64\141\163\x68\142\157\141\162\x64\x2f\137\146\x6f\x6f\164\145\162"); goto Y2kKE; N01l8: $this->load->view("\137\x74\x65\155\160\x6c\141\164\x65\x73\57\x64\x61\163\150\x62\157\141\162\144\x2f\x5f\150\x65\x61\x64\145\x72", $data); goto X6nIc; X8iII: } public function getPost() { $post = $this->post->getPostForUser(null); $this->output_json($post); } public function getComment($id_post, $page) { goto Ycyov; Ycyov: $perPage = 5; goto V97Ok; DMSp5: $this->db->where("\x61\56\151\144\x5f\160\157\163\x74", $id_post); goto HB9oe; HB9oe: $this->db->limit($perPage, $offset); goto Syrcg; i_Fpj: $this->db->order_by("\x61\56\x74\x61\156\x67\x67\x61\154", "\x64\x65\x73\143"); goto DMSp5; Iertn: $this->db->join("\x6d\141\x73\164\145\x72\137\163\x69\x73\167\x61\x20\x63", "\x61\56\x64\141\x72\x69\75\x63\56\151\x64\x5f\x73\x69\x73\167\x61", "\154\x65\146\x74"); goto i_Fpj; RLMH4: $this->db->from("\x70\157\163\164\x5f\x63\157\155\155\x65\x6e\x74\x73\40\x61"); goto BzXr9; Syrcg: $comment = $this->db->get()->result(); goto tLQ6w; kiHXu: $this->db->select("\x61\56\x2a\x2c\x20\x62\x2e\156\141\155\141\x5f\147\x75\x72\x75\54\x20\142\56\146\157\x74\157\54\40\143\x2e\156\x61\155\141\x20\141\163\40\156\x61\x6d\141\137\163\x69\163\x77\141\54\40\x63\x2e\x66\x6f\164\x6f\40\141\x73\40\146\x6f\164\x6f\137\x73\x69\163\x77\141\x2c\x20\x28\123\x45\x4c\105\103\x54\x20\103\x4f\x55\x4e\124\50\160\x6f\x73\164\137\162\x65\160\x6c\x79\x2e\151\x64\x5f\x72\145\160\x6c\171\x29\x20\106\122\x4f\115\x20\160\x6f\163\x74\x5f\x72\x65\x70\x6c\x79\x20\127\x48\105\x52\x45\40\x61\56\151\x64\137\143\157\x6d\x6d\x65\156\164\x20\x3d\x20\x70\157\x73\164\x5f\162\x65\160\x6c\171\x2e\x69\x64\137\143\157\155\155\145\156\x74\51\40\101\x53\40\152\x6d\x6c"); goto RLMH4; BzXr9: $this->db->join("\155\141\163\x74\x65\162\x5f\147\165\162\x75\40\142", "\141\56\144\x61\x72\x69\75\x62\56\151\144\137\x67\165\x72\165", "\x6c\x65\146\164"); goto Iertn; V97Ok: $offset = $page * $perPage; goto kiHXu; tLQ6w: $this->output_json($comment); goto IgOB3; IgOB3: } public function getReplies($id_comment, $page) { goto Ikcyc; MbbAr: $this->db->join("\155\141\x73\x74\x65\x72\137\x67\165\x72\x75\40\x62", "\141\x2e\144\x61\162\151\75\x62\56\x69\144\137\x67\165\162\x75", "\154\145\146\164"); goto v_Nt0; leA7L: $this->db->select("\141\56\52\x2c\40\142\56\156\141\x6d\x61\137\147\x75\162\x75\54\x20\x62\56\x66\x6f\164\x6f\x2c\x20\143\56\x6e\141\155\x61\40\141\x73\40\156\141\155\141\x5f\x73\x69\x73\x77\x61\x2c\40\x63\x2e\146\x6f\x74\x6f\x20\x61\163\x20\x66\157\164\x6f\137\163\x69\163\x77\x61"); goto kXdlc; Ikcyc: $perPage = 5; goto KOlfk; gDjK3: $this->output_json($replies); goto QHBeY; pNXxk: $this->db->order_by("\x61\56\x74\x61\x6e\147\x67\x61\154", "\x64\145\163\x63"); goto CM4v0; kXdlc: $this->db->from("\x70\157\x73\164\137\162\145\x70\154\x79\x20\141"); goto MbbAr; zsv1p: $this->db->limit($perPage, $offset); goto yJfgl; KOlfk: $offset = $page * $perPage; goto leA7L; v_Nt0: $this->db->join("\x6d\x61\163\164\x65\x72\137\x73\x69\163\x77\x61\40\143", "\141\56\144\x61\162\151\75\x63\56\151\x64\137\163\151\x73\x77\x61", "\154\x65\x66\164"); goto pNXxk; CM4v0: $this->db->where("\141\56\x69\144\x5f\x63\x6f\155\x6d\x65\156\164", $id_comment); goto zsv1p; yJfgl: $replies = $this->db->get()->result(); goto gDjK3; QHBeY: } public function save() { goto Ttn8j; lUIH8: $dari = $this->input->post("\x64\x61\162\151"); goto URdIv; URdIv: $data = ["\153\x65\160\x61\x64\x61" => serialize($kepada), "\144\141\162\x69" => $dari, "\144\x61\162\x69\x5f\147\x72\x6f\165\160" => $dari == "\x30" ? "\61" : "\62", "\164\145\x78\x74" => $this->input->post("\x74\x65\x78\164")]; goto gdxG8; gdxG8: $insert = $this->db->replace("\160\157\x73\164", $data); goto MPvxG; Ttn8j: $kepada = json_decode(json_encode($this->input->post("\x6b\145\160\x61\x64\141\133\x5d", true))); goto lUIH8; MPvxG: $this->output_json($insert); goto dhckP; dhckP: } public function saveKomentar() { goto sOw2P; e130o: $user = $this->ion_auth->user()->row(); goto vtZDN; ee7Sc: $this->db->join("\155\141\x73\164\x65\x72\x5f\147\165\x72\165\x20\x62", "\141\x2e\144\141\162\151\x3d\x62\56\151\x64\x5f\147\165\x72\x75", "\x6c\x65\x66\164"); goto Trd9H; GlkdG: $dari_group = 2; goto eJFqn; sOw2P: $dari = "\60"; goto xY3ZE; SEaAp: $dari = $guru->id_guru; goto GlkdG; AaS83: $smt = $this->master->getSemesterActive(); goto C1UC8; gBDlq: $this->db->from("\x70\157\163\164\137\x63\157\155\155\145\156\164\163\x20\141"); goto ee7Sc; eJFqn: GKgM4: goto BQP7a; gGRcc: $this->db->order_by("\x61\56\x74\x61\x6e\147\x67\141\x6c", "\x64\145\163\x63"); goto vbMBA; Ou1U_: $this->output_json($comment); goto BUwzn; Trd9H: $this->db->join("\155\141\x73\164\x65\162\137\163\x69\x73\167\x61\40\x63", "\141\56\x64\x61\x72\x69\x3d\143\x2e\x69\144\137\x73\151\163\x77\141", "\154\x65\x66\x74"); goto gGRcc; kqxpQ: $this->db->select("\x61\56\52\x2c\x20\142\56\156\141\x6d\x61\x5f\x67\x75\162\165\54\40\x62\x2e\x66\157\164\x6f\54\x20\143\x2e\156\x61\x6d\141\x20\141\x73\40\156\141\x6d\x61\x5f\x73\151\163\167\x61\54\x20\143\x2e\x66\157\164\x6f\x20\141\163\40\146\x6f\x74\157\137\x73\x69\x73\167\x61\54\x20\50\123\x45\114\x45\103\124\40\x43\x4f\125\x4e\124\50\160\x6f\x73\164\x5f\162\145\x70\154\171\x2e\x69\x64\x5f\x72\x65\x70\154\x79\x29\40\106\122\117\x4d\x20\160\x6f\163\164\137\162\x65\160\154\171\40\127\110\105\122\105\40\x61\x2e\151\x64\x5f\143\x6f\155\x6d\x65\156\x74\40\x3d\x20\160\x6f\x73\164\x5f\162\145\x70\x6c\171\x2e\151\x64\137\x63\157\155\155\x65\156\164\51\40\x41\x53\40\x6a\155\154"); goto gBDlq; uga5r: $insert = $this->db->replace("\160\157\x73\x74\x5f\143\x6f\x6d\x6d\145\x6e\164\x73", $data); goto Yn_Z_; C1UC8: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto SEaAp; vbMBA: $this->db->where("\141\56\x69\x64\x5f\x63\157\x6d\x6d\x65\x6e\x74", $id); goto XzwyD; BQP7a: $data = ["\151\x64\x5f\x70\x6f\x73\x74" => $this->input->post("\151\x64\x5f\160\x6f\x73\x74"), "\144\x61\x72\x69" => $dari, "\144\141\x72\151\x5f\147\x72\x6f\x75\x70" => $dari_group, "\164\145\x78\x74" => $this->input->post("\164\145\x78\164")]; goto uga5r; xY3ZE: $dari_group = 1; goto x1JHC; Yn_Z_: $id = $this->db->insert_id(); goto kqxpQ; XzwyD: $comment = $this->db->get()->result(); goto Ou1U_; vtZDN: $tp = $this->master->getTahunActive(); goto AaS83; x1JHC: if ($this->ion_auth->is_admin()) { goto GKgM4; } goto e130o; BUwzn: } public function saveBalasan() { goto WXRq3; I4T05: $this->output_json($replies); goto Qj9iw; tV2w3: $insert = $this->db->replace("\x70\x6f\x73\x74\137\162\x65\x70\154\x79", $data); goto TwKvp; CErhx: $this->db->where("\141\56\x69\x64\x5f\162\x65\x70\154\x79", $id); goto LsxpT; c1f4F: $user = $this->ion_auth->user()->row(); goto rO8rJ; XfQKp: $dari_group = 2; goto eKjB_; WXRq3: $dari = "\x30"; goto v1j4T; xPYtb: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto H4284; nPXM2: $this->db->join("\x6d\141\163\x74\x65\x72\x5f\147\165\162\x75\x20\x62", "\141\56\144\x61\x72\151\75\x62\56\151\x64\137\147\x75\162\x75", "\x6c\145\146\x74"); goto Rq6C7; v1j4T: $dari_group = 1; goto j7nAc; VGhGB: $this->db->select("\141\56\x2a\54\x20\142\x2e\x6e\x61\155\141\x5f\x67\x75\x72\x75\54\x20\142\56\x66\157\x74\157\54\x20\x63\x2e\x6e\x61\155\141\40\141\x73\40\x6e\141\155\141\x5f\x73\151\163\x77\141\x2c\x20\143\x2e\146\157\x74\157\x20\x61\163\x20\x66\x6f\x74\157\x5f\x73\151\163\167\x61"); goto vCaPL; z3eFI: $this->db->order_by("\141\x2e\x74\x61\x6e\x67\x67\141\154", "\144\145\x73\143"); goto CErhx; Oqn4w: $smt = $this->master->getSemesterActive(); goto xPYtb; H4284: $dari = $guru->id_guru; goto XfQKp; LsxpT: $replies = $this->db->get()->result(); goto I4T05; ofIcq: $data = ["\151\144\137\143\157\x6d\x6d\145\156\x74" => $this->input->post("\151\x64\137\x63\157\155\155\x65\156\x74"), "\x64\x61\162\151" => $dari, "\x64\x61\x72\x69\137\147\162\157\165\160" => $dari_group, "\x74\145\x78\164" => $this->input->post("\x74\145\x78\164")]; goto tV2w3; eKjB_: QIa6g: goto ofIcq; TwKvp: $id = $this->db->insert_id(); goto VGhGB; vCaPL: $this->db->from("\x70\157\x73\164\x5f\x72\x65\160\x6c\171\x20\141"); goto nPXM2; Rq6C7: $this->db->join("\155\x61\163\x74\x65\x72\x5f\x73\x69\x73\167\141\x20\x63", "\141\56\144\141\162\151\75\x63\56\x69\x64\137\x73\151\163\x77\141", "\x6c\x65\146\x74"); goto z3eFI; rO8rJ: $tp = $this->master->getTahunActive(); goto Oqn4w; j7nAc: if ($this->ion_auth->is_admin()) { goto QIa6g; } goto c1f4F; Qj9iw: } public function hapusPost($id_post) { goto XdFO9; g6svz: $this->db->where("\x69\144\137\x70\x6f\x73\x74", $id_post); goto xiixL; M65Ar: BwitX: goto qw0nB; I95V6: $comments = $this->post->getIdComments($id_post); goto DtXQb; qw0nB: $this->db->trans_complete(); goto HWJC6; DtXQb: foreach ($comments as $comment) { goto IvRkt; V7yTW: $deleted["\x62\141\x6c\x61\163\x61\x6e"] = $this->db->delete("\160\x6f\163\x74\x5f\x72\145\160\154\x79"); goto g9N77; IvRkt: $this->db->where("\151\x64\137\143\x6f\155\155\145\156\x74", $comment->id_comment); goto V7yTW; g9N77: LMGzj: goto vms0B; vms0B: } goto sanMy; BcMv0: $deleted = $this->db->delete("\160\157\163\164"); goto M65Ar; XdFO9: $this->db->trans_start(); goto I95V6; HWJC6: $this->output_json($deleted); goto sHsQl; sanMy: aOhqj: goto g6svz; jYvLa: $this->db->where("\x69\144\137\x70\157\163\x74", $id_post); goto BcMv0; xiixL: if (!$this->db->delete("\160\x6f\x73\x74\x5f\x63\157\x6d\155\x65\156\164\163")) { goto BwitX; } goto jYvLa; sHsQl: } public function hapusKomentar($id_comment) { goto X0B8Z; CXrTT: $this->output_json($deleted); goto DFuH7; X0B8Z: $this->db->trans_start(); goto JmHh8; OkVF5: $deleted["\153\157\155\145\x6e\164\141\x72"] = $this->db->delete("\x70\x6f\x73\x74\x5f\x63\x6f\155\155\x65\156\x74\163"); goto rcKza; JmHh8: $this->db->where("\x69\x64\x5f\x63\157\155\x6d\x65\x6e\x74", $id_comment); goto OkVF5; iv_DB: $this->db->trans_complete(); goto CXrTT; XKwG2: $deleted["\142\141\x6c\141\x73\x61\x6e"] = $this->db->delete("\x70\x6f\x73\x74\137\x72\x65\x70\154\x79"); goto iv_DB; rcKza: $this->db->where("\151\144\137\143\157\x6d\x6d\145\156\x74", $id_comment); goto XKwG2; DFuH7: } public function hapusBalasan($id_reply) { goto AosI2; Ajv5s: $this->output_json($deleted); goto XuH1K; H1U3o: $deleted["\142\141\154\x61\x73\x61\x6e"] = $this->db->delete("\160\x6f\x73\164\x5f\x72\x65\160\x6c\x79"); goto Z3Wgj; AfgsR: $this->db->where("\x69\144\x5f\162\145\160\154\171", $id_reply); goto H1U3o; AosI2: $this->db->trans_start(); goto AfgsR; Z3Wgj: $this->db->trans_complete(); goto Ajv5s; XuH1K: } public function getRunningText() { $data["\162\x75\156\156\x69\156\x67\x5f\164\x65\170\x74"] = $this->dashboard->getRunningText(); $this->output_json($data); } public function saveRunningText() { goto hmSgq; hmSgq: $input = json_decode($this->input->post("\x74\145\170\164", true)); goto XAi8m; DoZdM: $data["\x73\x74\x61\x74\165\x73"] = $updates; goto eMltR; a12Di: foreach ($input as $d) { goto vmzdA; vmzdA: $data = ["\x69\144\x5f\x74\x65\170\164" => $d->id_text, "\164\x65\170\x74" => $d->text]; goto oagIb; v93Qr: array_push($updates, $update); goto k1VpT; k1VpT: UWLCM: goto T1GTr; oagIb: $update = $this->db->replace("\162\x75\156\x6e\151\156\147\137\x74\x65\x78\x74", $data); goto v93Qr; T1GTr: } goto CoJ2p; eMltR: $this->output_json($data); goto W_Ixu; CoJ2p: fVvC8: goto DoZdM; XAi8m: $updates = []; goto a12Di; W_Ixu: } public function hapusRunningText($id) { goto vLzD1; vLzD1: $this->db->where("\x69\144\x5f\164\x65\170\164", $id); goto qRU1m; qRU1m: $deleted = $this->db->delete("\x72\165\156\156\151\156\x67\x5f\x74\145\170\x74"); goto MNkrJ; MNkrJ: $this->output_json($deleted); goto riKeo; riKeo: } }
