<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name = "post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=200)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="sumario", type="string", length=500)
     */
    private $sumario;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="string", length=5000)
     */
    private $conteudo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_publicacao", type="date")
     */
    private $dataPublicacao;

    /**
     * Construct
     */
     public function __construct()
     {
        $this->dataPublicacao = new \DateTime();
     }
     
     
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Post
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set sumario
     *
     * @param string $sumario
     * @return Post
     */
    public function setSumario($sumario)
    {
        $this->sumario = $sumario;

        return $this;
    }

    /**
     * Get sumario
     *
     * @return string 
     */
    public function getSumario()
    {
        return $this->sumario;
    }

    /**
     * Set conteudo
     *
     * @param string $conteudo
     * @return Post
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get conteudo
     *
     * @return string 
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set dataPublicacao
     *
     * @param \DateTime $dataPublicacao
     * @return Post
     */
    public function setDataPublicacao($dataPublicacao)
    {
        $this->dataPublicacao = $dataPublicacao;

        return $this;
    }

    /**
     * Get dataPublicacao
     *
     * @return \DateTime 
     */
    public function getDataPublicacao()
    {
        return $this->dataPublicacao;
    }
}
