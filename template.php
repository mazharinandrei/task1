<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>

<? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
	<?= $arResult["NAV_STRING"] ?><br />
<? endif; ?>
<div class="article-list">
	<? foreach ($arResult["ITEMS"] as $arItem): ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<a
			class="article-item article-list__item"
			href="<?= $arItem["DETAIL_PAGE_URL"] ?>"
			data-anim="anim-3">
			<div class="article-item__background">
				<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
					<img
						src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
						data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx"
						alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>/>"
						title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
						<? endif; ?>
						</div>
					<div class="article-item__wrapper">
						<div class="article-item__title"><? echo $arItem["NAME"] ?></div>
						<div class="article-item__content">
							<? echo $arItem["PREVIEW_TEXT"]; ?>
						</div>
					</div>
		</a>
	<? endforeach; ?>
</div>