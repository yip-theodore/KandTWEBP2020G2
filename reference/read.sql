SELECT
`id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`
FROM
`content`
WHERE
`id` = :id
;

window.addEventListener('wheel', function() {
  window.location.href = ''
})
