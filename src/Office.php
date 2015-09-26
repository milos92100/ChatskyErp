<?php

/**
 * @Entity
 *
 * @Table(name="office",uniqueConstraints={@UniqueConstraint(name="search_idx",
 * columns={"number"})})
 */
class Office extends Room
{
}