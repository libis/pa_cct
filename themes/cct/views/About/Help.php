<?php
	MetaTagManager::setWindowTitle($this->request->config->get("app_display_name").": Search Tips");
?>
<H1><?php print _t("Search Tips"); ?></H1>
<div class="row" style="text-align: justify; text-justify: inter-word;">
	<div class="col-sm-8">
		<p>
            <ul  style="line-height:2;">
                <li>
                    Titles can be found in European languages, pinyin or characters:<br>
                    For example: tian zhu shi yi or 天主實義
                </li>
                <li>
                    For pinyin, leave spaces between syllables; place names in pinyin are without space or hyphen:<br>
                    For example: tian zhu jiao; Shanghai, Zhongguo.
                </li>
                <li>
                    Authors can be found according to Western name, pinyin or characters; there is no hyphen between two syllables in pinyin:<br>
                    For example: Erik Zürcher or Xu Lihe or 許理和; Albert Chan or Chen Lunxu or 陳綸緒.
                </li>
                <li>
                    The 'Author' search does not distinguish between types of author (editor, translator, collaborator, imprimatur, etc.).
                </li>
                <li>
                    You can limit your search to source type, category or year.
                </li>
                <li>
                    No distinction is made between lowercase and UPPERCASE.
                </li>
                <li>
                    A search across multiple fields is performed based on AND operator.
                </li>
                <li>
                    All searches are exact term searches.<br>
                    For example: The search for <u>Christian communities</u> in the Title field will retrieve all records that have completely and exactly (excluding the case) the term <u>Christian communities</u> in one of the titles.
                </li>
                <li>
                    Asterisk (*) can be appended (only at the end) to a search term in order to find records containing the exact term or as a substring in the value of the searched field(s):<br>
                    For example: <u>Christian*</u> will retrieve Christian, Christianity, christiana, christianisme, etc.
                </li>
                <li>
                    For a search term containing less than three characters one needs to suffix asterisk (*) to the search term.
                </li>
            </ul>
        </p>
	</div>
</div>