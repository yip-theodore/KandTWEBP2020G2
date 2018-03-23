UPDATE
`content`
SET
`id` = :id,
`slug` = :slug,
`title` = :title,
`h1`= :h1,
`p`= :p,
`span-class` = :span-class,
`span-text`= :span-text,
`img-alt`= :img-alt,
`img-src`= :img-src,
`nav-title`= :nav-title
WHERE
`id` = :id
;
