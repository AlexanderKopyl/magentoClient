<?php

declare(strict_types=1);


namespace Alex\MagentoClient\Interfaces\DataTransfer;


interface UrlDataTransferInterfaces
{
    /**
     * @var string
     */
    public const STORE_URL = '/V1/store/storeViews';

    /**
     * @var string
     */
    public const STORE_GROUP_URL = '/V1/store/storeGroups';

    /**
     * @var string
     */
    public const STORE_WEBSITES_URL = '/V1/store/websites';

    /**
     * @var string
     */
    public const STORE_CONFIGS_URL = '/V1/store/storeConfigs';

    /**
     * @var string
     */
    public const CUSTOMER_GROUPS_SEARCH_URL = '/V1/customerGroups/search';

    /**
     * @var string
     */
    public const CUSTOMER_GROUPS_URL = '/V1/customerGroups/';

    /**
     * @var string
     */
    public const LANG_RU = 'ru';

    /**
     * @var string
     */
    public const LANG_UK = 'ua';

    /**
     * @var string uk uri
     */
    public const DEFAULT_URL = 'index.php/rest/';
}
