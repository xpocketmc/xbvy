<?php

/*
 * This file is part of BedrockProtocol.
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types;

final class SubChunkPacketEntryWithoutCacheList{

	/**
	 * @param SubChunkPacketEntryWithoutCache[] $entries
	 */
	public function __construct(
		private array $entries
	){}

	/**
	 * @return SubChunkPacketEntryWithoutCache[]
	 */
	public function getEntries() : array{ return $this->entries; }
}