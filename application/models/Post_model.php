<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Post_model extends CI_Model { public function getPostUser($id_user) { goto rC3fC; RANSv: return $posts; goto zaZ2M; w1ItG: $this->db->from("\160\157\x73\x74\x20\x61"); goto q4LpT; q4LpT: $this->db->join("\x6d\x61\163\x74\x65\162\137\x67\x75\x72\165\40\142", "\x61\56\x64\141\162\151\75\142\x2e\x69\144\x5f\147\165\162\165", "\154\145\146\x74"); goto oRD2G; gxgVW: $this->db->where("\x61\x2e\x64\141\162\151", $id_user); goto XYsO0; XYsO0: tw83C: goto H5zA2; rg8v0: $posts = $this->db->get()->result(); goto RANSv; H5zA2: $this->db->order_by("\x61\x2e\165\x70\x64\141\164\x65\144", "\x64\x65\163\143"); goto rg8v0; oRD2G: if (!($id_user != 0)) { goto tw83C; } goto gxgVW; rC3fC: $this->db->select("\141\56\x2a\x2c\x20\142\56\156\x61\x6d\141\x5f\147\x75\162\x75\x2c\40\x62\56\146\x6f\164\x6f\54\40\50\x53\x45\114\x45\x43\124\x20\x43\x4f\x55\x4e\124\50\160\157\163\x74\137\x63\157\155\x6d\145\156\x74\x73\56\151\144\x5f\x63\157\155\x6d\145\156\x74\x29\x20\106\x52\x4f\115\x20\x70\157\x73\164\x5f\x63\157\155\155\x65\156\164\x73\x20\127\110\105\x52\x45\x20\141\x2e\x69\144\137\160\x6f\x73\164\x20\75\40\160\157\163\164\x5f\143\157\155\x6d\x65\x6e\164\x73\x2e\x69\x64\137\x70\x6f\163\x74\x29\x20\x41\123\x20\x6a\x6d\154"); goto w1ItG; zaZ2M: } public function getPostForUser($kepada, $kelas = null) { goto xty0d; pjKOL: DDDo_: goto LdrEF; jNRi1: $this->db->where("\50\141\56\153\145\160\x61\144\141\40\x4c\111\113\105\x20" . $kepada . "\51\x20\117\x52\40\50\x61\56\x6b\x65\x70\141\144\x61\40\x4c\111\113\x45\x20" . $kelas . "\51"); goto pjKOL; DpAsR: $this->db->join("\x6d\x61\x73\x74\145\x72\137\x67\165\x72\x75\x20\142", "\141\56\144\x61\162\x69\75\x62\56\x69\144\137\147\x75\x72\165", "\x6c\145\146\x74"); goto V2vWb; W_WAe: return $posts; goto B3aHn; LdrEF: $this->db->order_by("\141\x2e\165\160\144\141\x74\x65\x64", "\x64\x65\163\143"); goto JFH_1; V2vWb: if (!($kepada != null)) { goto DDDo_; } goto jNRi1; vrSUx: $this->db->from("\160\157\163\x74\40\x61"); goto DpAsR; xty0d: $this->db->select("\x61\x2e\x2a\54\40\142\56\156\x61\x6d\141\x5f\x67\165\162\165\54\40\142\x2e\x66\x6f\164\157\54\x20\50\123\x45\114\105\x43\124\40\x43\x4f\125\116\124\x28\x70\157\x73\164\137\143\x6f\155\x6d\x65\156\164\x73\x2e\x69\144\137\x63\x6f\155\x6d\145\156\x74\51\x20\x46\x52\x4f\x4d\x20\160\x6f\163\x74\x5f\x63\157\155\x6d\x65\156\164\x73\40\127\110\105\122\x45\40\x61\56\x69\144\137\x70\x6f\x73\164\x20\75\40\x70\157\163\x74\137\143\157\x6d\x6d\x65\x6e\x74\x73\x2e\x69\x64\x5f\160\x6f\x73\x74\51\x20\101\123\x20\x6a\x6d\154"); goto vrSUx; JFH_1: $posts = $this->db->get()->result(); goto W_WAe; B3aHn: } public function getIdComments($id_post) { goto mhXKy; AU0Px: $this->db->where("\x69\x64\x5f\x70\x6f\x73\164", $id_post); goto knI9h; QYBR_: return $ids; goto mFLFV; mhXKy: $this->db->select("\151\144\137\x63\157\x6d\x6d\145\156\x74"); goto AU0Px; knI9h: $ids = $this->db->get("\x70\x6f\163\x74\137\143\157\155\x6d\x65\x6e\164\163")->result(); goto QYBR_; mFLFV: } public function getIdReplies($id_comment) { goto VCHUt; ji5FK: goto yiN8b; goto AbPW3; DT8jk: return $ids; goto orWf4; TXMgL: if (is_array($id_comment)) { goto xbe4i; } goto tSKxn; tSKxn: $this->db->where("\151\144\x5f\143\157\155\155\x65\156\x74", $id_comment); goto ji5FK; WIt5k: $this->db->where_in("\151\x64\137\143\x6f\155\x6d\145\156\164", $id_comment); goto RT6jg; VCHUt: $this->db->select("\151\144\x5f\162\145\160\x6c\x79"); goto TXMgL; RT6jg: yiN8b: goto pMjdf; pMjdf: $ids = $this->db->get("\x70\x6f\x73\164\x5f\x72\145\160\x6c\171")->result(); goto DT8jk; AbPW3: xbe4i: goto WIt5k; orWf4: } }
