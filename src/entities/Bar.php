<?php

/**
 * Test entity for showing the rename index issue
 *
 * @Entity
 * @Table(
 *      name="bar",
 *      indexes={
 *          @Index(name="IDX_MANY_TO_ONE", columns={"foo_id"})
 *      }
 * )
 */
class Bar
{
    /**
     * @Id
     * @Column
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Foo", inversedBy="bars")
     */
    protected $foo;
}
