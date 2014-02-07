<?php

/**
 * Test entity for showing the rename index issue
 *
 * @Entity
 * @Table(
 *      name="foo",
 *      indexes={
 *          @Index(name="IDX_CUSTOM_NAME", columns={"baz"})
 *      }
 * )
 */
class Foo
{
    /**
     * @Id
     * @Column
     */
    protected $id;

    /**
     * @OneToMany(targetEntity="Bar", mappedBy="foo")
     */
    protected $bars;

    /**
     * @Column
     */
    protected $baz;
}
