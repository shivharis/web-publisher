<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Publisher Revision Component.
 *
 * Copyright 2017 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2015 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Component\Revision\Model;

interface RevisionInterface
{
    const STATE_PUBLISHED = 'published';

    const STATE_REPLACED = 'replaced';

    const STATE_NEW = 'new';

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime;

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime;

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt);

    /**
     * @return \DateTime
     */
    public function getPublishedAt(): \DateTime;

    /**
     * @param \DateTime $publishedAt
     */
    public function setPublishedAt(\DateTime $publishedAt);

    /**
     * @return bool
     */
    public function isIsActive(): bool;

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive);

    /**
     * @param RevisionInterface $revision
     */
    public function setPrevious(self $revision);

    /**
     * @return RevisionInterface|null
     */
    public function getPrevious();

    /**
     * @return string
     */
    public function getUniqueKey();

    /**
     * @param string $uniqueKey
     */
    public function setUniqueKey($uniqueKey);

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     */
    public function setStatus(string $status);
}
