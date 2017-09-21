<?php
	MetaTagManager::setWindowTitle($this->request->config->get("app_display_name").": Help");
?>
<H1><?php print _t("CCT-Database Search Tips"); ?></H1>

<div class="row" style="text-align: justify; text-justify: inter-word;">
	<div class="col-sm-8">
		<p>
            <ul>
                <li>No distinction is made between lowercase and UPPERCASE.</li>
                <li>Search on multiple fields is performed based on AND operator.</li>
                <li>All searches are exact term searches. <br>For example:
                    <ul>
                        <li><u>Christian communities</u> search on Title field will return all records that have complete and exact (excluding the case) term Christian communities in one of the titles.</li>
                    </ul>
                </li>
                <li>Asterisk (*) can be appended (only at the end) to a search term to find records containing the exact term or as a substring in the value of the searched field(s). <br>For example:
                    <ul>
                        <li><u>gun*</u> will retrieve gun, guns, gunners, gunnery, gunning, etc.</li>
                    </ul>
                </li>
                <li>For a search term less than three characters you need to suffix asterisk (*) to the search term.</li>
            </ul>
        </p>
	</div>
</div>