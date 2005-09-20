<p class="sgNavBar sgTopNavBar">
<?php if($sg->gallery->hasPrev()) echo $sg->gallery->prevLink()." | "; ?> 
<?php if(!$sg->gallery->isRoot()) echo $sg->gallery->parentLink(); ?> 
<?php if($sg->gallery->hasNext()) echo " | ".$sg->gallery->nextLink(); ?>
</p>

<h2 class="sgTitle"><?php echo $sg->gallery->name(); ?></h2>
<h4 class="sgSubTitle"><?php echo $sg->gallery->byArtistText(); ?></h4>

<div class="sgShadow"><table class="sgShadow" cellspacing="0">
  <tr>
    <td><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template?>images/shadow-tabl.gif" alt="" /></td>
    <td class="tabm"><table class="sgShadowTab" cellspacing="0"><tr><td>
  
    <?php echo $sg->galleryTab(); ?>
  
    </td><td><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template?>images/shadow-tabr.gif" alt="" /></td></tr></table></td>
    <td class="tabr"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
  </tr>
  <tr>
    <td class="tl"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" width="32" height="16" alt="" /></td>
    <td class="tm"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
    <td class="tr"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
  </tr>
  <tr>
    <td class="ml"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
    <td class="mm">
    <?php for($index = $sg->gallery->startat; $index < $sg->gallery->galleryCountSelected()+$sg->gallery->startat; $index++): ?> 
    <div class="sgGallery"><table class="sgGallery">
    <tr valign="top">
      <td class="sgGalleryThumb">
        <?php echo $sg->gallery->galleries[$index]->thumbnailLink(); ?> 
      </td>
      <td>
        <p><strong><?php echo $sg->gallery->galleries[$index]->nameLink(); ?></strong></p>
        <p><?php echo $sg->gallery->galleries[$index]->summary(); ?></p>
        <p>[<?php echo $sg->gallery->galleries[$index]->itemCountText(); ?>]</p>
      </td>
    </tr>
    </table>
    </div>
    <?php endfor; ?> 
    </td>
    <td class="mr"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
  </tr>
  <tr>
    <td class="bl"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
    <td class="bm"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" alt="" /></td>
    <td class="br"><img src="<?php echo $sg->config->base_url.$sg->config->pathto_current_template ?>images/blank.gif" width="32" height="32" alt="" /></td>
  </tr>
</table></div>
  
  
<p class="sgDetailsList">
<?php foreach($sg->gallery->detailsArray() as $key => $value): ?>
<strong><?php echo $key; ?>:</strong> <?php echo $value; ?><br />
<?php endforeach; ?>
</p>