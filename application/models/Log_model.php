<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Log_model extends CI_Model { function __construct() { parent::__construct(); $this->load->library("\x75\x73\145\x72\x5f\x61\147\x65\x6e\x74"); } public function saveLog($type, $desc) { goto UFwdJ; bkO_G: $this->insertLog($user_id, $group->id, $group->name, $type, $desc, $agent, $os, $ip); goto T8lxG; JiL6v: ICGxh: goto pmHcB; Z1wdG: XZU_Q: goto WolGF; iyMlI: $agent = "\104\141\164\141\x20\165\x73\x65\162\40\x67\x61\147\x61\x6c\x20\144\x69\40\144\141\x70\141\x74\x6b\x61\x6e"; goto eQ1hC; UFwdJ: $user_id = $this->ion_auth->user()->row()->id; goto FlLDB; OWaDl: K5iGU: goto EYPQ_; pmHcB: $agent = $this->agent->mobile(); goto Z1wdG; okjxS: goto XZU_Q; goto JiL6v; fq8mY: if ($this->agent->is_browser()) { goto K5iGU; } goto oAXa_; eQ1hC: goto XZU_Q; goto OWaDl; WolGF: $os = $this->agent->platform(); goto AOyEY; EYPQ_: $agent = $this->agent->browser() . "\40" . $this->agent->version(); goto okjxS; oAXa_: if ($this->agent->is_mobile()) { goto ICGxh; } goto iyMlI; AOyEY: $ip = $this->input->ip_address(); goto bkO_G; FlLDB: $group = $this->ion_auth->get_users_groups($user_id)->row(); goto fq8mY; T8lxG: } private function insertLog($id_user, $group_id, $group_name, $type, $desc, $agent, $os, $ip) { $data = array("\151\144\x5f\165\163\x65\x72" => $id_user, "\151\x64\x5f\147\x72\157\165\160" => $group_id, "\156\x61\155\145\137\x67\x72\x6f\165\x70" => $group_name, "\154\157\147\x5f\x64\145\163\x63" => $desc, "\141\x64\144\162\x65\x73\163" => $ip, "\x61\x67\145\156\164" => $agent, "\144\145\x76\151\x63\145" => $os); $this->db->insert("\154\157\x67", $data); } public function loadNotifikasi() { } public function loadChat() { } public function loadAktifitas($limit = null) { goto r_6Px; dUaJf: if (!($limit != null)) { goto eKcdp; } goto qJtpD; AXYXe: $this->db->join("\165\x73\x65\x72\163\40\x62", "\x62\56\x69\144\75\x61\56\151\x64\x5f\x75\x73\x65\162", "\154\145\x66\164"); goto Q8D_Y; b8kpR: $result = $this->db->get()->result(); goto tjIp0; Q8D_Y: $this->db->join("\x67\162\157\x75\160\163\40\x64", "\144\56\x69\x64\75\141\56\x69\144\x5f\x67\x72\157\x75\160"); goto dUaJf; qJtpD: $this->db->limit($limit, 0); goto f0sek; r_6Px: $this->db->select("\141\x2e\x2a\54\40\142\x2e\146\x69\x72\163\x74\137\156\141\x6d\145\x2c\40\142\x2e\154\141\x73\164\x5f\156\141\x6d\x65\54\x20\144\56\x6e\x61\x6d\145"); goto Cw8nB; Cw8nB: $this->db->from("\x6c\x6f\147\40\141"); goto AXYXe; dgT8P: $this->db->order_by("\x61\56\x6c\157\147\137\164\151\155\x65", "\104\x45\x53\x43"); goto b8kpR; f0sek: eKcdp: goto dgT8P; tjIp0: return $result; goto hNMQj; hNMQj: } public function loadAktifitasSiswa($limit = null) { goto ioVHL; JPn2z: $this->db->order_by("\x61\x2e\x6c\157\x67\137\164\x69\x6d\x65", "\104\x45\x53\x43"); goto Jy_iB; AqX9F: $this->db->join("\x75\163\x65\x72\163\40\x62", "\142\56\x69\x64\75\141\x2e\151\x64\137\x75\x73\x65\162", "\154\x65\x66\x74"); goto GDGTq; Jy_iB: $result = $this->db->get()->result(); goto sLvCq; glLvy: $this->db->from("\x6c\x6f\147\40\x61"); goto AqX9F; GDGTq: $this->db->join("\x67\162\157\x75\x70\x73\40\x64", "\144\56\x69\144\75\141\56\x69\x64\x5f\x67\x72\x6f\x75\160"); goto dKK2T; oJDuC: CVjLz: goto UWqcf; dKK2T: if (!($limit != null)) { goto CVjLz; } goto cb1vm; sLvCq: return $result; goto sO6N7; ioVHL: $this->db->select("\141\x2e\52\x2c\40\142\x2e\x66\x69\162\163\164\x5f\156\x61\155\145\x2c\40\142\x2e\x6c\x61\163\164\x5f\x6e\x61\x6d\x65\x2c\x20\x64\56\x6e\141\155\x65"); goto glLvy; UWqcf: $this->db->where("\141\x2e\x69\x64\x5f\x67\x72\x6f\165\160", "\63"); goto JPn2z; cb1vm: $this->db->limit($limit, 0); goto oJDuC; sO6N7: } }
