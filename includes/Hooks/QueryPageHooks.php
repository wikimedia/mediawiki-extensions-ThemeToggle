<?php
namespace MediaWiki\Extension\ThemeToggle\Hooks;

use MediaWiki\Extension\ThemeToggle\SpecialPages\SpecialThemeUsage;
use MediaWiki\SpecialPage\Hook\WgQueryPagesHook;

final class QueryPageHooks implements WgQueryPagesHook {
	public function onWgQueryPages( &$queryPages ): void {
		$queryPages[] = [ SpecialThemeUsage::class, 'ThemeUsage' ];
	}
}
